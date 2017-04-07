<?php
use Illuminate\Http\Request;

Route::get('/movies', 'MovieController@index');
Route::get('/movies/{movieId}', 'MovieController@show');

Route::get('/directors', 'DirectorController@index');
Route::post('/directors', 'DirectorController@create');

Route::get('/directors/{directorId}', 'DirectorController@show');
Route::put('/directors/{directorId}', 'DirectorController@update');
Route::delete('/directors/{directorId}', 'DirectorController@destroy');

Route::get('/', function () {
    return view('welcome'); // change to index
});
