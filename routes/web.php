<?php
use Illuminate\Http\Request;
//old api
Route::get('/directors', 'DirectorController@index');
Route::post('/directors', 'DirectorController@create');

Route::get('/directors/{directorId}', 'DirectorController@show');
Route::put('/directors/{directorId}', 'DirectorController@update');
Route::delete('/directors/{directorId}', 'DirectorController@destroy');


Route::get('/movies', 'MovieController@index');
Route::post('/movies', 'MovieController@create');

Route::get('/movies/{movieId}', 'MovieController@show');
Route::put('/movies/{movieId}', 'MovieController@update');
Route::delete('/movies/{movieId}', 'MovieController@destroy');


Route::get('/movie-genres', 'MovieGenreController@index');
Route::post('/movie-genres', 'MovieGenreController@create');

Route::get('/movie-genres/{id}', 'MovieGenreController@show');
Route::put('/movie-genres/{id}', 'MovieGenreController@update');
Route::delete('/movie-genres/{id}', 'MovieGenreController@destroy');
//\old api




Route::get('/', function () {
    return view('app');
});
Route::get('/styleguide', function () {
    return view('styleguide');
});
