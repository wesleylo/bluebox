<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder {
    public function run() {
      DB::table('movies')->insert([
          'title' => 'Passengers',
          'movieUrl' => str_random(10),
          'imageUrl' => 'https://images.redbox.com/Images/EPC/boxartvertical/200120.jpg',
          'trailerUrl' => 'https://images.redbox.com/Images/EPC/stillframe/200120.jpg',
          'year' => 2017,
          'price' => 1.50,
          'numCopies' => 3,
          'mpRating' => 'PG-13',
          'imbdRating' => 7.0,
          'directorId' => 1,
          'runtime' => 116,
          'plot' => 'Jim and Aurora are two passengers onboard a spaceship transporting 5,000 people to a new life on another planet. The trip takes a deadly turn when their hibernation pods mysteriously wake them 90 years before they reach their destination. As Jim and Aurora try to unravel the mystery behind the malfunction, they begin to fall for each other, unable to deny their intense attraction – only to be threatened by the imminent collapse of the ship and the discovery of the truth behind why they woke up.',
      ]);
      DB::table('movies')->insert([
          'title' => 'Moana',
          'movieUrl' => str_random(10),
          'imageUrl' => 'https://images.redbox.com/Images/EPC/boxartvertical/200124.jpg',
          'trailerUrl' => 'http://www.imdb.com/title/tt1355644/videoplayer/vi1586607641?ref_=tt_ov_vi',
          'year' => 2016,
          'price' => 1.50,
          'numCopies' => 5,
          'mpRating' => 'PG',
          'imbdRating' => 7.7,
          'directorId' => 2,
          'runtime' => 180,
          'plot' => 'An adventurous Polynesian teenager sails out on a daring mission to save her people. During her journey, Moana meets the once-mighty demigod Maui, who guides her in her quest to become a master way-finder. Together, they sail across the open ocean on an action-packed voyage, encountering enormous monsters and impossible odds, and along the way, Moana fulfills the ancient quest of her ancestors and discovers the one thing she’s always sought: her own identity.',
      ]);
      DB::table('movies')->insert([
          'title' => 'Why him?',
          'movieUrl' => str_random(10),
          'imageUrl' => 'https://images.redbox.com/Images/EPC/boxartvertical/200141.jpg',
          'trailerUrl' => 'https://images.redbox.com/Images/EPC/stillframe/200141.jpg',
          'year' => 2017,
          'price' => 1,
          'numCopies' => 5,
          'mpRating' => 'PG',
          'imbdRating' => 7.7,
          'directorId' => 2,
          'runtime' => 100,
          'plot' => 'Plot',
      ]);
      DB::table('movies')->insert([
          'title' => 'La La Land',
          'movieUrl' => str_random(10),
          'imageUrl' => 'https://images.redbox.com/Images/EPC/boxartvertical/200126.jpg',
          'trailerUrl' => 'https://images.redbox.com/Images/EPC/stillframe/200126.jpg',
          'year' => 2017,
          'price' => 1,
          'numCopies' => 5,
          'mpRating' => 'PG',
          'imbdRating' => 7.7,
          'directorId' => 2,
          'runtime' => 100,
          'plot' => 'Plot',
      ]);
      DB::table('movies')->insert([
          'title' => 'Sing',
          'movieUrl' => str_random(10),
          'imageUrl' => 'https://images.redbox.com/Images/EPC/boxartvertical/200131.jpg',
          'trailerUrl' => 'https://images.redbox.com/Images/EPC/stillframe/200131.jpg',
          'year' => 2017,
          'price' => 1,
          'numCopies' => 5,
          'mpRating' => 'PG',
          'imbdRating' => 7.7,
          'directorId' => 2,
          'runtime' => 108,
          'plot' => 'Buster Moon is a dapper Koala who presides over a once-grand theater that has fallen on hard times. He is an eternal optimist—okay, maybe a bit of a scoundrel—who loves his theater above all and will do anything to preserve it. Now facing the crumbling of his life’s ambition, he has one final chance to restore his fading jewel to its former glory by producing the world’s greatest singing competition. Five lead contestants emerge: a mouse who croons as smoothly as he cons, a timid teenage elephant with an enormous case of stage fright, an overtaxed mother run ragged tending a litter of 25 piglets, a young gangster gorilla looking to break free of his family’s felonies, and a punk-rock porcupine struggling to shed her arrogant boyfriend and go solo. Each animal arrives under Buster’s marquee believing that this is their shot to change the course of their life.',
      ]);
      DB::table('movies')->insert([
          'title' => 'Lion',
          'movieUrl' => str_random(10),
          'imageUrl' => 'https://images.redbox.com/Images/EPC/boxartvertical/200136.jpg',
          'trailerUrl' => 'https://images.redbox.com/Images/EPC/stillframe/200136.jpg',
          'year' => 2017,
          'price' => 1,
          'numCopies' => 5,
          'mpRating' => 'PG-13',
          'imbdRating' => 7.7,
          'directorId' => 2,
          'runtime' => 120,
          'plot' => 'Five-year-old Saroo gets lost on a train which takes him thousands of miles across India, away from home and family. Saroo must learn to survive alone in Kolkata, before ultimately being adopted by an Australian couple. Twenty five years later, armed with only a handful of memories, his unwavering determination, and a revolutionary technology known as Google Earth, he sets out to find his lost family and finally return to his first home. Based on the book "A Long Way Home," written by Saroo Brierley.',
      ]);
    }
}
