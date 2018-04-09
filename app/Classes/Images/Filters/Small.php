<?php

namespace App\Classes\Images\Filters;


use Intervention\Image\Filters\FilterInterface;
use Intervention\Image\Image;

class Small implements FilterInterface
{
    private $maxW = 250;
    private $maxH = 250;

    public function applyFilter(Image $image)
    {
        return $image->resize($this->maxW, $this->maxH, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
    }
}