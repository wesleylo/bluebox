<?php

namespace App\Http\Controllers;
use App\Movie;

class MoviesController extends Controller
{
    public function index() {
      $movies = Movie::all();
      return $movies;
      //return Response::json($movies); // Is this necessary if laravel automatically displays json?
      //return view('movies.index', compact('movies')); // Eventually display in a view.
    }
    public function show(Movie $movieID) { // Task::find(wildcard)
      //$movie = Movie::find($movieID);
      return $movieID;
    }
}
