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

Route::get('/', 'Blog\HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Web Routes/login route
|--------------------------------------------------------------------------
*/
Route::get('/login/form','Blog\LoginController@LoginForm')->name('login.form');
Route::post('/login','Blog\LoginController@Login')->name('login');
Route::post('/register','Blog\RegisterController@store')->name('register');