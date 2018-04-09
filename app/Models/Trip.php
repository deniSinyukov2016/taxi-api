<?php

namespace App\Models;

class Trip extends Entity
{
    protected $fillable = ['from', 'to', 'comment', 'description', 'date', 'accepted', 'rated', 'init_id', 'accept_id'];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('id', 'role');
    }
}
