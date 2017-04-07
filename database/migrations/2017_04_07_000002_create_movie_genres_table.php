<?php
// Migrate third. To reset, drop first.
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieGenresTable extends Migration {
  public function up() {
    Schema::create('movie_genres', function (Blueprint $table) {
      $table->increments('id', true);
      $table->integer('movieId')->unsigned();
      $table->enum('genre', ['Action', 'Comedy', 'Drama', 'Family', 'Horror', 'Sci-Fi']);
    });
    Schema::table('movie_genres', function($table) {
      $table->foreign('movieId')->references('movieId')->on('movies')
      ->comment('A single movie may have multiple genres.');
    });
  }

  public function down() {
    Schema::dropIfExists('movie_genres');
  }
}
