<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return 'Welcome to Music App';
});

Route::group(['as' => 'User::'], function () {
    Route::get('/users', ['uses' => 'UserController@index', 'as' => 'index']);
    Route::get('/user/{id}', ['uses' => 'UserController@show', 'as' => 'show']);

});
Route::group(['as' => 'Artist::'], function () {
    Route::get('/artists', ['uses' => 'ArtistController@index', 'as' => 'index']);
    Route::get('/artist/{id}', ['uses' => 'ArtistController@show', 'as' => 'show']);

});
