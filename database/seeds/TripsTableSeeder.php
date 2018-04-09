<?php

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    public function run()
    {
        $users = \App\Models\User::query()->pluck('id')->toArray();
        $faker   = \Faker\Factory::create();

        foreach ($users as $user) {
            for ($i = 0; $i < 5; $i++) {
                $trip = Trip::create([
                    'from' => $faker->randomFloat(7, -120, -118) . ',' . $faker->randomFloat(7, 33, 36),
                    'to' => $faker->randomFloat(7, -120, -118) . ',' . $faker->randomFloat(7, 33, 36),
                    'comment' => $faker->text,
                    'date' => $faker->time(),
                ]);
            }

            $trip->users()->attach($faker->randomElements($users, rand(1, 4)));
        }

//        for ($i = 0; $i < 150; $i ++) {
//            Trip::create([
//                'from' => $faker->randomFloat(7, -120, -118) . ',' . $faker->randomFloat(7, 33, 36),
//                'to' => $faker->randomFloat(7, -120, -118) . ',' . $faker->randomFloat(7, 33, 36),
//                'comment' => $faker->text,
//                'date' => $faker->time(),
////                'user_id' => $faker->randomElement($users),
////                'accepter_id' => $faker->randomElement($users),
//            ]);
//        }
    }
}
