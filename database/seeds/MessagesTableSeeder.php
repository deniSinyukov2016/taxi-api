<?php

use App\Models\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        $users = \App\Models\User::query()->pluck('id')->toArray();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 1000; $i ++) {
            Message::create([
                'message' => $faker->text,
                'sender_id' => $faker->randomElement($users),
                'receiver_id' => $faker->randomElement($users),
            ]);
        }
    }
}
