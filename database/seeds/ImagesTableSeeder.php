<?php

use Illuminate\Database\Seeder;
use App\Models\{Image, User};

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $userIds = User::query()->pluck('id')->toArray();

        foreach ($userIds as $id) {
            for ($j = 0; $j < 4; $j++) {
                $image = $faker->image(storage_path('app/public/images'));
                Image::query()->create([
                    'user_id' => $id,
                    'file'  => \App\Services\ImageService::create($image),
                    'position' => $j + 1
                ]);
            }
        }
    }
}
