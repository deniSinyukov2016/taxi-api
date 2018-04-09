<?php

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
    Route::group(['prefix' => 'user'], function () {
        Route::get('trips', 'UsersController@trips');
        Route::get('following', 'UsersController@following');
        Route::get('followers', 'UsersController@followers');
        Route::get('conversations', 'UsersController@conversations');
        Route::get('messages/{id}', 'UsersController@messages');
        Route::get('images', 'UsersController@images');
        Route::get('get-around', 'UsersController@getMembersAround');
        Route::get('count-events', 'UsersController@countNewEvents');
        Route::get('testimonials/{user}', 'UsersController@testimonials');
        Route::post('set-avatar', 'UsersController@setAvatar');
        Route::post('delete-avatar', 'UsersController@deleteAvatar');
        Route::post('add-testimonial', 'UsersController@addTestimonial');
        Route::post('follow/{id}', 'UsersController@follow');
        Route::post('unfollow/{id}', 'UsersController@unfollow');
        Route::delete('deactivate', 'UsersController@deactivate');

        Route::post('accounts', 'AccountsController@store');
        Route::put('accounts', 'AccountsController@update');
        Route::delete('accounts', 'AccountsController@delete');
    });
    Route::resource('messages', 'MessageController', ['only' => ['store', 'update', 'destroy']]);
    Route::resource('trips', 'TripController', ['only' => ['show', 'store', 'update', 'destroy']]);
    Route::resource('images', 'ImageController', ['only' => ['store', 'destroy']]);
    Route::resource('feedback', 'FeedbackController', ['only' => ['store']]);

    Route::post('send-accepted-notification/{user}', 'TripController@sendAcceptedNotification');
    Route::get('me', 'UsersController@me');
});

Route::group(['prefix' => 'v1'], function () {
    // Auth
    Auth::routes();

    Route::get('auth/{token}', 'Auth\LoginController@handle');
});
