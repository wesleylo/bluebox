<?php
// Migrate second. To reset, drop second.
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {
  public function up() {
    Schema::create('movies', function (Blueprint $table) {
      $table->increments('movieId', true);
      $table->char('title', 35)->default('');
      $table->char('movieUrl', 100)->default('');
      $table->char('imageUrl', 100)->default('');
      $table->char('trailerUrl', 100)->default('');
      $table->smallInteger('year')->default(0);
      $table->float('price', 3, 2)->default(0.0);
      $table->tinyInteger('numCopies')->default(0);
      $table->enum('mpRating', ['Not rated', 'G', 'PG', 'PG-13', 'NC-17', 'R']); // Defaults to first element in list because not null?
      $table->float('imbdRating', 2, 1)->default(0.0);
      //$table->integer('directorId')->unsigned(); // nullable?
      $table->integer('directorId')->nullable()->default(null)->unsigned();
      $table->smallInteger('runtime')->default(0)->comment('In minutes.');
      $table->text('plot'); // Default value not allowed for memory conservation.
    });
    Schema::table('movies', function($table) {
      $table->foreign('directorId')->references('directorId')->on('directors')
      ->comment('One director per movie. A single director may direct multiple movies.');
    });
  }

  public function down() {
    Schema::dropIfExists('movies');
  }
}
