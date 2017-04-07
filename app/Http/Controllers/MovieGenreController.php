<?php

namespace App\Http\Controllers;

use App\MovieGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class MovieGenreController extends Controller {
  public function index() {
    // GET /movie-genres
    $movieGenres = MovieGenre::all();
    return $movieGenres;
  }

  public function create(Request $request) {
    // POST /movie-genres
    MovieGenre::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show(MovieGenre $id) { // MovieGenre::find(wildcard)
    // GET /movie-genres/$id
    return $id;
  }

  public function update(Request $request, MovieGenre $id) {
    // PUT /movie-genres/$id
    $success = $id->update($request->all());
    return Response::json(['updated' => $success]);
  }

  public function destroy($id) {
    // DELETE /movie-genres/$id
    $movieGenre = MovieGenre::find($id);
    $movieGenre->delete();
    return Response::json(['deleted' => true]);
  }
}
