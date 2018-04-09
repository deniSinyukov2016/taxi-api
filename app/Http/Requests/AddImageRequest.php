<?php

namespace App\Http\Requests;

class AddImageRequest extends AuthorizeTrueRequest
{
    public function rules() : array
    {
        return [
            'file' => 'required',
            'position' => 'integer|in:1,2,3,4|nullable',
            'old_img_id' => 'integer|exists:images,id|nullable'
        ];
    }
}
