<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mobile', 'SmartphoneController@mobile')->name('mobile');

Route::get('/view_mobile/{id}', 'SmartphoneController@viewMobile')->name('view_mobile');

Route::post('/post/{id}', 'SmartphoneController@postMobile')->name('post_mobile');

