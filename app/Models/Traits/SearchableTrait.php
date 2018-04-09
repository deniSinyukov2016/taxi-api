<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait SearchableTrait
{
    public function scopeSearch(Builder $q, $search, $attributes)
    {
        $attributes = is_array($attributes) ? $attributes : explode(',', $attributes);
        if (!empty($search) && !empty($attributes)) {
            $q->where($attributes[0], 'LIKE', "%$search%");
            array_shift($attributes);
            if (count($attributes) > 0) {
                foreach ($attributes as $attribute) {
                    $q->orWhere($attribute, 'LIKE', "%$search%");
                }
            }
        }

        return $q;
    }

    public function scopeInclude(Builder $q, $with)
    {
        return !empty($with) ? $q->with(explode(',', $with)) : $q;
    }

    public function scopeWithRaw(Builder $q, $raw)
    {
        return !empty($raw) ? $q->selectRaw($raw) : $q;
    }

    public function scopeWithDeleted(Builder $q, $withTrashed)
    {
        if ($withTrashed == 'all') {
            $q->withTrashed();
        } elseif ($withTrashed == 'only') {
            $q->onlyTrashed();
        }

        return $q;
    }

    public function scopeSearchable(Builder $q, Request $request)
    {
        return $q->withDeleted($request->withTrashed)->withRaw($request->raw)->include($request->with)
            ->search($request->search, $request->searchBy)
            ->orderBy($request->orderBy ?: 'id', $request->order ?: 'asc');
    }
}
