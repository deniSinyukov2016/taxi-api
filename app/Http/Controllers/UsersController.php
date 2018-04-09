<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateOnlineStatusRequest;
use App\Services\ImageService;
use File;
use App\Models\Image;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\AddTestimonialRequest;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\JsonResponse as Json;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/** @resource Users */
class UsersController extends Controller
{
    /** Index */
    public function index(Request $request)
    {
        return response()->json(User::searchable($request)->paginate($request->limit));
    }

    /** Store */
    public function store(AddUserRequest $request) : Json
    {
        $register = new RegisterController();
        $register->validator($request->all())->validate();

        return response()->json(event(new Registered($register->create($request->all()))));
    }

    /** Show */
    public function show(User $user) : Json
    {
        $user->rating = $user->testimonials()->get()->map(function ($q) {
            return $q->pivot->rating;
        })->avg();

        if (auth()->id() !== $user->id) {
            $user->chatting_availability = intval(
                auth()->user()
                      ->trips()
                      ->where('accepted', 1)
                      ->whereHas('users', function ($q) use ($user) {
                          $q->where('users.id', $user->id);
                      })->exists()
            );
        }

        return response()->json($user->load('images'));
    }

    /** Update */
    public function update(UpdateUserRequest $request, User $user) : Json
    {
        if (isset($request->password)) {
            return response()->json($user->update(['password' => bcrypt($request->password)]));
        } else {
            return response()->json($user->update($request->all()));
        }

    }

    /** Set avatar */
    public function setAvatar(Request $request)
    {
        if (isset($request->avatar)) {
            $user = auth()->user();

            if ($user->avatar && Storage::has('public/images/' . $user->avatar)) {
                ImageService::removeFile($user->avatar);
            }

            return response()->json($user->update([
                'avatar' => ImageService::create($request->file('avatar')),
            ]));
        }
    }

    /** Delete avatar */
    public function deleteAvatar()
    {
        ImageService::removeFile(auth()->user()->avatar);

        return response()->json(auth()->user()->update([
            'avatar' => null
        ]));
    }

    /** Destroy */
    public function destroy(User $user) : Json
    {
        return response()->json($user->delete());
    }

    /** Me */
    public function me() : Json
    {
        return response()->json(auth()->user()->makeVisible('api_token'));
    }

    /** Conversations */
    public function conversations() : Json
    {
        return response()->json(auth()->user()->conversations());
    }

    /** Messages */
    public function messages(int $id) : Json
    {
        return response()->json(auth()->user()->messages($id)->get()->map(function ($q) {
            return $q->pivot;
        }));
    }

    /** Following */
    public function following() : Json
    {
        return response()->json(auth()->user()->following()->get());
    }

    /** Followers */
    public function followers() : Json
    {
        return response()->json(auth()->user()->followers()->get());
    }

    /** Follow */
    public function follow(int $id) : Json
    {
        return response()->json(auth()->user()->following()->attach($id));
    }

    /** Unfollow */
    public function unfollow(int $id) :Json
    {
        return response()->json(auth()->user()->following()->detach($id));
    }

    /** Trips */
    public function trips() : Json
    {
        return response()->json(auth()->user()->trips()->get()
            ->map(function ($q) {
                $initiator = User::find($q->init_id);
                $acceptor = User::find($q->accept_id);
                return [
                    'init' => collect($initiator)->only(['first_name', 'avatar', 'distance', 'online']),
                    'accept' => collect($acceptor)->only(['first_name', 'avatar', 'distance', 'online']),
                    'initiator_id' => $q->init_id,
                    'acceptor_id' => $q->accept_id,
                    'id' => $q->id,
                    'from' => $q->from,
                    'to' => $q->to,
                    'comment' => $q->comment,
                    'description' => $q->description,
                    'date' => $q->date,
                    'accepted' => $q->accepted,
                    'rated' => $q->rated,
                    'created_at' => $q->created_at
                ];
            })->sortByDesc(function ($item) {
                return $item['created_at'];
            })->values()->all());
    }

    /** Images */
    public function images() : Json
    {
        return response()->json(auth()->user()->images()->get());
    }

    /** Get members around */
    public function getMembersAround() : Json
    {
        $users = User::where('id', '<>', auth()->user()->id)
                     ->get()->where('distance', '<=', auth()->user()->radius);

        return response()->json(paginate($users, 20));
    }

    /** Testimonials */
    public function testimonials(User $user) : Json
    {
        return response()->json($user->testimonials()->get()
            ->map( function ($q) {
                return [
                    'rating' => $q->pivot->rating,
                    'comment' => $q->pivot->comment,
                    'author_id' => $q->id,
                    'author_name' => $q->first_name,
                    'avatar' => $q->avatar,
                    'created_at' => $q->pivot->created_at
                ];
            })->sortByDesc(function ($item) {
                return $item['created_at'];
            })->values()->all());
    }

    /** Add testimonial */
    public function addTestimonial(AddTestimonialRequest $request) : Json
    {
        return response()->json(Testimonial::create([
            'user_id' => $request->user_id,
            'author' => auth()->id(),
            'rating' => $request->rating,
            'comment' => isset($request->comment) ? $request->comment : null
        ]));
    }

    /** Count new events */
    public function countNewEvents(Request $request) : Json
    {
        if (!$request->has('date')) {
            return response()->json(['success' => false, 'msg' => 'This date field is required']);
        }
        $count_trip = auth()->user()->trips()
                            ->where('accepted', 0)
                            ->where('accept_id', auth()->id())
                            ->where('date', '>=', $request->date)
                            ->count();
        $count_mess = 0;
        foreach (auth()->user()->conversations() as $m) {
            if ($m['message']['pivot']['receiver_id'] == auth()->id() && $m['message']['pivot']['read'] == 0) {
                $count_mess++;
            }
        }

        return response()->json(['new_messages' => $count_mess, 'new_trip' => $count_trip]);
    }

    /** Deactivate */
    public function deactivate()
    {
        return response()->json(auth()->user()->forceDelete());
    }
}
