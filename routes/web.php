<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// // Actor routes
// Route::get('actors', 'ActorController@index')->name('actors.index');
// Route::get('actors/create', 'ActorController@create')->name('actors.create');
Route::resource('actors','ActorController');
// // Film routes
// Route::get('films', 'FilmController@index')->name('films.index');
// Route::get('films/{id}', 'FilmController@show')->name('films.show');

Route::resource('films','FilmController');


Route::post('search', 'FilmController@search')->name('films.search');