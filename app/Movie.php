<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {
    protected $guarded = []; // Make all attributes mass assignable.
    public $primaryKey = 'movieID';
    public $timestamps = false;
}
