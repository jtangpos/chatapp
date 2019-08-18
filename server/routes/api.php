<?php
Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([
    'middleware' => 'auth'
], function () {

    Route::get('/message/all', 'MessageController@all');
});


Route::post('/register', 'UserController@Register');
