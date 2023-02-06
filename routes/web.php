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
Auth::routes();

Route::get('/home', 'BerandaController@index')->name('home');

Route::get('/', 'BerandaController@index')->name('beranda');

Route::resource('post', 'PostController');

Route::resource('register', 'RegisterController');
Route::resource('login_akun', 'LoginakunController');

