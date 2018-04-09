<?php

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

function paginate($items, $perPage = 15, $pageName = 'page', $page = null)
{
    $items = $items instanceof Collection ? $items : collect($items);

    $page = $page ?: Paginator::resolveCurrentPage($pageName);

    $results = $items ? $items->forPage($page, $perPage) : collect();

    return new LengthAwarePaginator($results, $items->count(), $perPage, $page, [
        'path' => Paginator::resolveCurrentPath(),
        'pageName' => $pageName,
    ]);
}
