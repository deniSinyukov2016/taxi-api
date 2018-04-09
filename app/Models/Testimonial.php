<?php

namespace App\Models;

class Testimonial extends Entity
{
    protected $fillable = ['user_id', 'author', 'rating', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
