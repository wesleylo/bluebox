<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder {
    public function run() {
      DB::table('movies')->insert([
          'title' => 'Passengers',
          'movieUrl' => str_random(10),
          'imageUrl' => 'https://images.redbox.com/Images/EPC/boxartvertical/200120.jpg',
          'trailerUrl' => 'http://www.imdb.com/title/tt1355644/videoplayer/vi1586607641?ref_=tt_ov_vi',
          'year' => 2017,
          'price' => '1.50',
          'numCopies' => 3,
          'mpRating' => 'PG-13',
          'imbdRating' => 7.0,
          'directorId' => 1,
          'runtime' => 116,
          'plot' => 'Jim and Aurora are two passengers onboard a spaceship transporting 5,000 people to a new life on another planet. The trip takes a deadly turn when their hibernation pods mysteriously wake them 90 years before they reach their destination. As Jim and Aurora try to unravel the mystery behind the malfunction, they begin to fall for each other, unable to deny their intense attraction – only to be threatened by the imminent collapse of the ship and the discovery of the truth behind why they woke up.',
      ]);
    }
}
