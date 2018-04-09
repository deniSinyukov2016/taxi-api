<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class AuthorizeTrueRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    abstract public function rules() : array;
}
