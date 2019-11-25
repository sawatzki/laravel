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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/start', 'StartController@index')->name('start');

Route::get('/ajax', 'StartController@ajax')->name('ajax');
Route::get('/ajax/get-json', 'StartController@getJson');

Route::get('/cars', 'CarsController@index')->name('cars');
Route::get('/cars/get-cars', 'CarsController@getCars');
