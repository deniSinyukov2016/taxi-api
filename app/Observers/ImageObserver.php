<?php

namespace App\Observers;


use App\Models\Image;
use App\Services\ImageService;

class ImageObserver
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function deleted(Image $image)
    {
        $this->imageService->removeFile($image->getOriginal('file'));
    }
}