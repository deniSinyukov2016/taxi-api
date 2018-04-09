<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $count = 50;
        $userIds = [];

        User::query()->create([
            'first_name' => 'Admin',
            'city' => 'Detroit',
            'email' => 'admin@cronix.ms',
            'password' => bcrypt('admin123'),
            'api_token' => str_random(60),
            'device_token' => str_random(60),
            'provider' => 'facebook',
            'provider_id' => 'someId',
            'lat' => $faker->randomFloat(7, -120, -118),
            'lng' => $faker->randomFloat(7, 33, 36),
            'is_vehicle_owner' => 1,
            'radius' => 10,
        ]);

        if (!in_array('public/images', Storage::directories('public'))) {
        	Storage::makeDirectory('public/images');
        }

        Storage::delete(Storage::files('public/images'));

        for ($i = 0; $i < $count; $i++) {
            $image = $faker->image(storage_path('app/public/images'));

            $user = User::query()->create([
                'first_name' => $faker->unique()->firstName,
                'email' => $faker->unique()->email,
                'password' => bcrypt('user123'),
                'api_token' => str_random(60),
                'device_token' => str_random(60),
                'provider' => 'facebook',
                'provider_id' => 'someId',
                'lat' => $faker->randomFloat(7, -120, -118),
                'lng' => $faker->randomFloat(7, 33, 36),
                'is_vehicle_owner' => $faker->randomElement([1, 0]),
                'radius' => $faker->randomDigit,
                'city' => $faker->randomElement([
                    'Tyrafort',
                    'North Doug',
                    'Efrenstad',
                    'Port Margarete',
                    'East Burleymouth',
                    'West Jennings'
                ]),
                'avatar' => \App\Services\ImageService::create($image),
            ]);


            if (count($userIds) > 4) {
                $user->followers()->attach($faker->randomElements($userIds, rand(2, 5)));
                $user->following()->attach($faker->randomElements($userIds, rand(2, 5)));
            }

            $userIds[] = $user->id;
        }
    }
}
