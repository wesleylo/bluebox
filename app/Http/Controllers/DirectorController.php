<?php

namespace App\Http\Controllers;

use App\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class DirectorController extends Controller {
  public function index() {
    // GET /directors
    $directors = Director::all();
    return $directors;
  }

  public function create(Request $request) {
    // POST /directors
    Director::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show(Director $directorId) { // Director::find(wildcard)
    // GET /directors/$directorId
    return $directorId;
  }

  public function update (Request $request, Director $directorId) {
    // PUT /directors/$directorId
    $success = $directorId->update($request->all());
    return Response::json(['updated' => $success]);
  }

  public function destroy ($directorId) {
    // DELETE /directors/$directorId
    $director = Director::find($directorId);
    $director->delete();
    return Response::json(['deleted' => true]);
  }
}
