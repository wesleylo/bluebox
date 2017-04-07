<?php
// Migrate first
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorsTable extends Migration {
  public function up() {
    Schema::create('directors', function (Blueprint $table) {
      $table->increments('directorId', true);
      $table->char('firstName', 25)->default('');
      $table->char('lastName', 25)->default('');
    });
  }

  public function down() {
    Schema::dropIfExists('directors');
  }
}
