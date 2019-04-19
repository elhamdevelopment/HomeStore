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

//user dashboard
Route::get('/dash', function () {
    return view('user.dashboard');
});
Route::get('/profile', function () {
    return view('user.user-profile');
});
Route::get('/address', function () {
    return view('user.addressManage');
});
Route::get('/change-password', function () {
    return view('user.change-password');
});
Route::get('/favourite', function () {
    return view('user.favourite');
});
Route::get('/wallet', function () {
    return view('user.wallet');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/order', function () {
    return view('order');
});

Route::get('/res', function () {
    return view('restaurants');
});
Route::get('/detail', function () {
    return view('restaurant-detail');
});
//Route::get('test','Controller@index');
//Route::get('test2','Controller@registerUser');
//Route::get('/tt', function () {
// return getControllerActions();
//});
//
//Route::post('/role','Controller@test')->name('role');
////Route::get('/role/{model}','Controller@test');
//Route::post('/foo', function () {
//    echo 1;
//    return;
//});
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@showloginForm')->name('login');
Route::get('/register', 'HomeController@showRegisterForm')->name('register');
Route::get('/user', 'user\UserProfileController@getUser')->name('user');
//Route::get('/login', function () {
//    return view('auth/login');
//});
