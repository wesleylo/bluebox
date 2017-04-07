<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model {
  protected $guarded = []; // Make all attributes mass assignable.
  public $primaryKey = 'directorId';
  public $timestamps = false;
}
