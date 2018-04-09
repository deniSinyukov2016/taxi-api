<?php

namespace App\Models;

class Message extends Entity
{
    protected $fillable = ['message', 'read', 'sender_id', 'receiver_id'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return$this->belongsTo(User::class, 'receiver_id');
    }
}
