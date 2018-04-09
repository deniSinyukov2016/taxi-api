<?php

namespace App\Http\Requests;

class FacebookLoginRequest extends AuthorizeTrueRequest
{
    public function rules() : array
    {
        return [
            'city' => 'string|nullable',
            'lat' => 'string|nullable',
            'lng' => 'string|nullable',
            'device_token' => 'required|string'
        ];
    }
}
