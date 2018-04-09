<?php

namespace App\Http\Requests;

class FeedbackRequest extends AuthorizeTrueRequest
{
    public function rules() : array
    {
        return [
            'body' => 'required|string|max:1000',
        ];
    }
}
