<?php

namespace App\Http\Controllers;
use App\Movie;

class MoviesController extends Controller
{
    public function index() {
      $movies = Movie::all();
      return $movies;
      //return Response::json($actors); is this necessary if laravel automatically displays json?
      //return view('movies.index', compact('movies')); eventually display in a view
    }
    //public function show(Movie $movie) { // Task::find(wildcard)
    public function show($id) { // Task::find(wildcard)
      $movie = Movie::find($id);
      return $movie;
      //return view('movies.show', compact('movie'));
    }
}
