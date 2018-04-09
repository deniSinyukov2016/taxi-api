<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return  Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'city' => 'required|string',
            'radius' => 'required|integer',
            'is_vehicle_owner' => 'required|boolean',
            'device_token' => 'required|string'
        ]);
    }

    protected function create(array $data)
    {
        return User::forceCreate([
            'first_name' => $data['first_name'],
            'email' => $data['email'],
            'birthday' => isset($data['birthday']) ? $data['birthday'] : null,
            'phone' => isset($data['phone']) ? $data['phone'] : null,
            'twitter' => isset($data['twitter']) ? $data['twitter'] : null,
            'instagram' => isset($data['instagram']) ? $data['instagram'] : null,
            'more' => isset($data['more']) ? $data['more'] : null,
            'relationship' => isset($data['relationship']) ? $data['relationship'] : null,
            'transports' => isset($data['transports']) ? $data['transports'] : null,
            'password' => bcrypt($data['password']),
            'api_token' => str_random(60),
            'device_token' => $data['device_token'],
            'city' => $data['city'],
            'radius' => $data['radius'],
            'is_vehicle_owner' => $data['is_vehicle_owner'],
            'lat' => isset($data['lat']) ? $data['lat'] : null,
            'lng' => isset($data['lng']) ? $data['lng'] : null,
        ]);
    }

    public static function facebookRegistrationWithoutEmail($facebookUser, $request)
    {
        $user = User::forceCreate([
            'first_name' => $facebookUser->user['name'],
            'email' => $facebookUser->id,
            'fb_id' => $facebookUser->id,
            'api_token' => str_random(60),
            'password' => bcrypt(str_random(16)),
            'city' => $request->city,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'is_vehicle_owner' => '0',
            'radius' => '0',
            'device_token' => $request->device_token
        ]);
        $avatar = self::createFacebookAvatar($facebookUser);
        $user->update(['avatar' => $avatar]);

        return $user->makeVisible('api_token');
    }

    private static function createFacebookAvatar($facebookUser)
    {
        $path  = 'storage/images/' . time().str_random() . '.jpg';
        file_put_contents($path, file_get_contents($facebookUser->avatar));

        return $path;
    }

    public function registered()
    {
        return response()->json($this->guard()->user()->makeVisible('api_token'));
    }
}
