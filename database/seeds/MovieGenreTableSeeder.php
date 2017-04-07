<?php

use Illuminate\Database\Seeder;

class MovieGenreTableSeeder extends Seeder {
    public function run() {
      DB::table('movie-genre')->insert([
          'movieId' => 1,
          'genre' => 'Drama',
      ]);
      DB::table('movie-genre')->insert([
          'movieId' => 1,
          'genre' => 'Sci-Fi',
      ]);
    }
}
