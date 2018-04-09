<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddImageRequest;
use App\Services\ImageService;
use Illuminate\Http\JsonResponse as Json;
use App\Models\Image;

/** @resource Images */
class ImageController extends Controller
{
    /** Store */
    public function store(AddImageRequest $request) : Json
    {
        if ($request->old_img_id) {
            Image::query()->find($request->old_img_id)->delete();
        }

        return response()->json(auth()->user()->images()->create([
            'file' => ImageService::create($request->file('file')),
            'position' => $request->position
        ]));
    }

    /** Destroy */
    public function destroy(Image $image) : Json
    {
        return response()->json($image->delete());
    }
}
