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
Route::get('professor',function (){
    return view('blog.professor_index');
})->name('professor');
Route::get('/login/form','Blog\LoginController@LoginForm')->name('login.form');
Route::post('/login','Blog\LoginController@Login')->name('login');
Route::get('/register/form','Blog\RegisterController@RegisterForm')->name('register.form');
Route::post('/register','Blog\RegisterController@store')->name('register');
Route::post('/logout', 'Blog\LoginController@logout')->name('logout');
//professor rout
Route::get('/allocate','Professor\LessonController@ShowLesson')->name('allocate');
//end professor route


//manager route
Route::get('user/create','Manager\UserController@CreateForm')->name('user.createForm');
Route::get('user/index','Manager\UserController@Index')->name('user.index');
//end manager route