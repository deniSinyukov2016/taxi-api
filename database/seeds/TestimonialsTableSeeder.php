<?php

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{
    public function run()
    {
        $users = \App\Models\User::query()->pluck('id')->toArray();
        $faker   = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i ++) {
            Testimonial::create([
                'user_id' => $faker->randomElement($users),
                'author' => $faker->randomElement($users),
                'rating' => $faker->numberBetween(1, 5),
                'comment' => $faker->text,
            ]);
        }
    }
}
