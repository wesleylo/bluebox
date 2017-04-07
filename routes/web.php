<?php

Route::get('/movies', 'MoviesController@index');
Route::get('/movies/{id}', 'MoviesController@show');

Route::get('/', function () {
    return view('welcome'); // change to index
});
