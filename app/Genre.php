<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {
  protected $guarded = []; // Make all attributes mass assignable.
  public $primaryKey = 'id';
  public $timestamps = false;
}
