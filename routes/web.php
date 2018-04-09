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
Route::group(['prefix' => 'v1'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
    Route::get('me', 'UsersController@me');
    Route::get('followers/{user}', 'UsersController@followers');
    Route::get('messages/{id}', 'UsersController@messages');
});
Route::group(['prefix' => 'v1'], function () {
    // Auth
    Auth::routes();
});

Auth::routes();