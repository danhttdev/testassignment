<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group( ['middleware' => 'api','namespace' => 'Api'], function(){
	Route::get('/films', 'FilmsController@index');
	Route::get('/films/{slug}', 'FilmsController@getBySlug');
	Route::get('/films/id/{id}', 'FilmsController@one');

	//---------err-----------
	Route::group(['middleware' => 'custom'], function(){
		Route::post('film/create', 'FilmsController@postCreate')->name('create');
	});
});

//---------err-----------
Route::group( ['middleware' => 'custom','namespace' => 'Api'], function(){
	Route::post('film/create', 'FilmsController@postCreate')->name('create');
});

Route::post('film/create', 'Api\FilmsController@postCreate')->name('create');
Route::post('comment/create', 'Api\CommentsController@postCreate');
