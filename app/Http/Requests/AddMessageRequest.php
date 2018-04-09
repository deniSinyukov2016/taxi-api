<?php

namespace App\Http\Requests;

class AddMessageRequest extends AuthorizeTrueRequest
{
    public function rules() : array
    {
        return [
            'message' => 'required|string',
            'receiver_id' => 'required|integer'
        ];
    }
}
