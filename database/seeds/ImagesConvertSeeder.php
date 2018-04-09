<?php

use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ImagesConvertSeeder extends Seeder
{
    public function run()
    {
        $files = Storage::files('public/images/');
        foreach ($files as $key => $file) {
            \App\Services\ImageService::create(storage_path('app/') . $file);
        }

        User::whereNotNull('avatar')->get()->each(function ($user) {
            $file = $user->getOriginal('avatar');
            if ($file) {
                $user->avatar = basename($file);
            }
            $user->save();
        });

        Image::get()->each(function ($image) {
            $file = $image->getOriginal('file');
            if ($file) {
                $image->file = basename($file);
            }
            $image->save();
        });
    }
}
