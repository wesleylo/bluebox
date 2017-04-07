<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call(DirectorsTableSeeder::class); // Order matters here for foreign key constraint.
        $this->call(MoviesTableSeeder::class);
        $this->call(MovieGenresTableSeeder::class);
    }
}
