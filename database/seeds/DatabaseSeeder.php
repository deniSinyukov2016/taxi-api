<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
//        $this->call(TripsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
