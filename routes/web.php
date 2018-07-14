<?php

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
    return view('homepage');
});

Route::get('/films', 'FilmsController@index');
Route::get('/films/id/{id}', 'FilmsController@one');
Route::get('/films/{slug}', 'FilmsController@getBySlug');
Route::get('/film/create', 'FilmsController@getCreate');

Route::get('/login','Auth\LoginController@getLogin');
Route::post('/login', 'Auth\LoginController@authenticate');
Route::get('/register', 'Auth\RegisterController@getRegister');
Route::post('/register', 'Auth\RegisterController@postRegister');
Route::get('/logout', 'Auth\LogoutController@logout');