<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTripRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'rated' => 'boolean'
//            'role' => 'string',
//            'from' => 'string',
//            'to' => 'string',
//            'comment' => 'string'
        ];
    }
}
