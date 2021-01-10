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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/bourses', 'HomeController@bourse')->name('bourse');
Route::get('/orientations', 'HomeController@orientation')->name('orientation');
Route::get('/formations', 'HomeController@formation')->name('formation');
Route::get('/contact', 'HomeController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
