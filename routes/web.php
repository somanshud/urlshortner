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


Route::get('url-shorten', 'HomeController@index');
Route::post('url-shorten', 'HomeController@store')->name('post.url.shorten');

Route::get('{code}', 'HomeController@shortenLink')->name('shorten.code');
