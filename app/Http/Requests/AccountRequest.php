<?php

namespace App\Http\Requests;

class AccountRequest extends AuthorizeTrueRequest
{
    public function rules() : array
    {
        return [
            'fb_id' => 'required|string',
        ];
    }
}
