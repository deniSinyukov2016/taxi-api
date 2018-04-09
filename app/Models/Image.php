<?php

namespace App\Models;

use App\Services\ImageService;

class Image extends Entity
{
    protected $fillable = ['user_id', 'file', 'position'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFileAttribute($value)
    {
        return $value ? ImageService::getUrls($value) : null;
    }
}
