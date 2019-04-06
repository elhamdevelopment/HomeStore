<?php

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => ['auth:api']], function () {

});
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/createRole', 'AuthController@getAuthUser');

//Route::group(['middleware' => ['jwt.auth']], function () {
//
//    Route::post('/register', 'AuthController@register');
//    Route::post('/login', 'AuthController@login');
//
////    Route::group(['middleware' => 'jwt.auth'], function () {
////        Route::get('user', 'AuthController@getAuthUser');
////        Route::post('/logout', 'AuthController@logout');
////    });
//
//});



