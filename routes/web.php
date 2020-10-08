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


Route::get('/test', function () {
    return view('olap/index');
});

Route::get('/admin','AdminController@index');
Route::get('/charts','AdminController@index2');

Route::get('/ok', function () {
    return view('test');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map', function () {
    return view('maps.map1');
});
