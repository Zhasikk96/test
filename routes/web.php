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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('upload', 'HomeController@uploadFile')->name('upload');
Route::post('upload2', 'HomeController@uploadFile2')->name('upload2');
Route::get('cabinet', 'HomeController@userCabinet');
Route::get('about', 'HomeController@About');
Route::get('test', 'HomeController@userTest');
Route::get('qual1', 'HomeController@userQual1');
Route::get('qual2', 'HomeController@userQual2');
Route::get('qual3', 'HomeController@userQual3');

