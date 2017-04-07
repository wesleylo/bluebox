<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up() {
    Schema::create('movies', function (Blueprint $table) {
      $table->increments('movieID');
      $table->char('title', 35)->default('');
      $table->char('movieURL', 50)->default('');
      $table->char('imageURL', 50)->default('');
      $table->char('trailerURL', 50)->default('');
      $table->smallInteger('year')->default(0);
      $table->float('price', 3, 2)->default(0.0);
      $table->tinyInteger('numCopies')->default(0);
      $table->enum('mpRating', ['Not rated', 'G', 'PG', 'PG-13', 'NC-17', 'R']); // Defaults to first element in list because not null?
      $table->float('imbdRating', 2, 1)->default(0.0);
      $table->integer('directorID')->default(0)->comment('One director per movie. A single director may direct multiple movies.');
      $table->smallInteger('runtime')->default(0)->comment('In minutes.');
      $table->text('plot'); // Default value not allowed for memory conservation.
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down() {
    Schema::dropIfExists('movies');
  }
}
