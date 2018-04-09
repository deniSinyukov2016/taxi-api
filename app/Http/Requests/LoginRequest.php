<?php

namespace App\Http\Requests;

class LoginRequest extends AuthorizeTrueRequest
{
    public function rules() : array
    {
        return [
            'email' => 'required|email|max:255',
            'password' => 'required|min:3',
        ];
    }
}
