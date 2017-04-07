<?php

use Illuminate\Database\Seeder;

class DirectorsTableSeeder extends Seeder {
    public function run() {
      DB::table('directors')->insert([
          'firstName' => 'Morten',
          'lastName' => 'Tyldum',
      ]);
    }
}
