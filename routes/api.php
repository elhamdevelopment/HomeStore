<?php

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::group(['middleware' => ['auth:api']], function () {
//
//});

Route::post('/user/update-profile','user\UserProfileController@updateProfile');
Route::post('/user/get-user','user\UserProfileController@getUser');
Route::post('/auth/change-password','auth\AccountController@changePassword');
Route::post('/user/addCredit','user\WalletController@addCredit');
Route::post('/user/add-address','user\AddressController@addAddress');
Route::post('/user/update-address','user\AddressController@udpateAddress');
Route::post('/user/delete-address','user\AddressController@deleteAddress');
Route::post('/user/get-address','user\AddressController@getAddress');
Route::post('/user/get-favorite','user\FavoriteController@getFavorite');
Route::post('/user/delete-favorite','user\FavoriteController@deleteFavorite');
Route::post('/user/order-detail','user\OrderController@getOrderById');
Route::post('/user/get-order','user\OrderController@getOrder');


Route::post('/register', 'auth\AuthController@register');
Route::post('/auth/logout', 'auth\AuthController@logout');
Route::post('/login', 'auth\AuthController@login');

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



