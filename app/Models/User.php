<?php

namespace App\Models;

use App\Models\Traits\SearchableTrait;
use App\Services\ImageService;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword as ResetPassword;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, SearchableTrait;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $appends = ['distance'];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'device_token',
        'provider',
        'provider_id',
        'phone',
        'avatar',
        'fb_id',
        'google_id',
        'birthday',
        'twitter',
        'instagram',
        'relationship',
        'city',
        'more',
        'is_vehicle_owner',
        'transports',
        'radius',
        'lat',
        'lng',
        'rating',
        'online'
    ];

    protected $hidden = ['password', 'remember_token', 'api_token'];

    public function trips()
    {
        return $this->belongsToMany(Trip::class)
            ->withPivot('role')->orderBy('created_at', 'desc');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'following_id', 'follower_id');
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'following_id');
    }

    public function conversationsForSenders()
    {
        return $this->belongsToMany(User::class, 'messages', 'sender_id', 'receiver_id')
            ->withPivot('message', 'created_at')
            ->wherePivot('sender_id', auth()->id())->wherePivot('receiver_id', '<>', auth()->id())
            ->orderBy('pivot_created_at', 'desc');
    }

    public function conversationsForReceivers()
    {
        return $this->belongsToMany(User::class, 'messages', 'receiver_id', 'sender_id')
            ->withPivot('message', 'created_at')
            ->wherePivot('sender_id', '<>', auth()->id())->wherePivot('receiver_id', auth()->id())
            ->orderBy('pivot_created_at', 'desc');
    }

    public function messages(int $id)
    {
        return $this
            ->belongsToMany(User::class, 'messages', 'sender_id', 'receiver_id')
            ->withPivot('id', 'message', 'read', 'created_at')
            ->wherePivot('sender_id', auth()->id())->wherePivot('receiver_id', $id)
            ->orWherePivot('receiver_id', auth()->id())->wherePivot('sender_id', $id)
            ->orderBy('pivot_created_at', 'desc');
    }

    public function conversations()
    {
        return $this->conversationsForReceivers()->get()->merge(
            $this->conversationsForSenders()->get()
        )->unique('id')->map(function ($user) {
            $messages = $this->messages($user->id);
            return [
                'id' => $user->id,
                'first_name' => $user->first_name,
                'avatar' => $user->avatar,
                'message' => $messages->first()->toArray(),
                'unread' => $messages->where('read', 0)->count(),
                'created_at' => $user->pivot->created_at
            ];
        })->sortByDesc(function ($item) {
            return $item['created_at'];
        })->values()->all();
    }

    public function testimonials()
    {
        return $this
            ->belongsToMany(User::class, 'testimonials', 'user_id', 'author')
            ->withPivot('rating', 'comment', 'created_at')
            ->orderBy('pivot_created_at', 'desc');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getDistanceAttribute()
    {
        if (isset(auth()->user()->id)) {
            return calculateTheDistance(
                    auth()->user()->lat,
                    auth()->user()->lng,
                    $this->lat,
                    $this->lng
                ) / 1609.34;
        } else {
            return -1;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token, $this->email));
    }

    public function getAvatarAttribute($value)
    {
        return $value ? ImageService::getUrls($value) : null;
    }
}
