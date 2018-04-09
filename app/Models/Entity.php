<?php

namespace App\Models;

use App\Models\Traits\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class Entity extends Model
{
    use SoftDeletes, SearchableTrait;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
