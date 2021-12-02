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

Route::get('/', 'IndexController@index');
Route::get('/index/motor', 'KendaraanController@motor')->name('motor');
Route::get('/index/motor/input', 'KendaraanController@inputmotor')->name('input_motor');
Route::get('/index/mobil', 'KendaraanController@mobil')->name('mobil');
Route::get('/index/mobil/input', 'KendaraanController@inputmobil')->name('input_mobil');
