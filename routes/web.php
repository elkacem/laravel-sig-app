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
Route::get('/charts/{requete}','AdminController@index2')->name('charts');

Route::get('/ok', function () {
    return view('test');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map1', function () { return view('maps.map1'); });
Route::get('/map2', function () { return view('maps.map2'); });
Route::get('/map3', function () { return view('maps.map3'); });
Route::get('/map4', function () { return view('maps.map4'); });
Route::get('/map5', function () { return view('maps.map5'); });
Route::get('/map6', function () { return view('maps.map6'); });

Route::get('/maps', function () { return view('layouts.master-maps'); });
Route::get('/crime', function () { return view('maps.crimes'); });
Route::get('/poste', function () { return view('maps.postepolice'); });

