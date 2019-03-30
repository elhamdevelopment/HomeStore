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

Route::get('/', function () {
    return view('welcome');
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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/re', 'Auth\RegisterController@createUser');
