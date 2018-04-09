<?php

namespace App\Classes\Images\Filters;


use Intervention\Image\Filters\FilterInterface;
use Intervention\Image\Image;

class Large implements FilterInterface
{
    private $maxW = 1000;
    private $maxH = 1000;

    public function applyFilter(Image $image)
    {
        return $image->resize($this->maxW, $this->maxH, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
    }
}