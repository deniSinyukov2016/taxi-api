<?php

namespace App\Http\Requests;

class UpdateMessageRequest extends AuthorizeTrueRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules() : array
    {
        return [
            'read' => 'boolean'
        ];
    }
}
