<?php

Route::prefix('auth')->group(function(){
    Route::get('', 'AuthController@getUserLogged');
    Route::put('', 'AuthController@refreshToken');
    Route::delete('', 'AuthController@logout');
});
