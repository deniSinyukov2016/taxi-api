<?php

namespace App\Http\Requests;

class AddTripRequest extends AuthorizeTrueRequest
{
    public function rules() : array
    {
        return [
            'acceptor_id' => 'required|integer',
            'from' => 'required|string',
            'to' => 'required|string',
            'date' => 'required|string',
            'comment' => 'required|string',
            'description' => 'required|string'
        ];
    }
}
