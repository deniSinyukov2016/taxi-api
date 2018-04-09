<?php

namespace App\Http\Requests;

class AddTestimonialRequest extends AuthorizeTrueRequest
{
    public function rules() : array
    {
        return [
            'user_id' => 'required|integer',
            'rating' => 'required|integer',
            'comment' => 'string'
        ];
    }
}
