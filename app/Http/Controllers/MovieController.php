<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class MovieController extends Controller {
  public function index() {
    // GET /movies
    $movies = Movie::all();
    return $movies;
  }

  public function create(Request $request) {
    // POST /movies
    Movie::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show(Movie $movieId) { // Movie::find(wildcard)
    // GET /movies/$movieId
    return $movieId;
  }

  public function update(Request $request, Movie $movieId) {
    // PUT /movies/$movieId
    $success = $movieId->update($request->all());
    return Response::json(['updated' => $success]);
  }

  public function destroy($movieId) {
    // DELETE /movies/$movieId
    $movie = Movie::find($movieId);
    $movie->delete();
    return Response::json(['deleted' => true]);
  }
}
