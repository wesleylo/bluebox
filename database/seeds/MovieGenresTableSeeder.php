<?php

use Illuminate\Database\Seeder;

class MovieGenresTableSeeder extends Seeder {
    public function run() {
      DB::table('movie_genres')->insert([
          'movieId' => 1,
          'genre' => 'Drama',
      ]);
      DB::table('movie_genres')->insert([
          'movieId' => 1,
          'genre' => 'Sci-Fi',
      ]);
      DB::table('movie_genres')->insert([
          'movieId' => 2,
          'genre' => 'Action',
      ]);
    }
}
