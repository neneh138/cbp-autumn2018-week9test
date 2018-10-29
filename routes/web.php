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


Route::get('/homepage', 'HomeController@index')->name('homepage');
Route::get(' /hero', 'HeroController@create');

Route::get(' /hero/batman', 'HeroController@show');
Route::get(' /hero', 'HeroController@index');

Route::post(' /hero/store', 'HeroController@store');






Auth::routes();
