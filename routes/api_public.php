<?php

Route::prefix('user')->group(function(){
    Route::post('/', 'UserController@createUser');
});

Route::prefix('auth')->group(function(){
    route::post('/', 'AuthController@login');
});
