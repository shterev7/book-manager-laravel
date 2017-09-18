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

Route::resource('authors', 'AuthorsController');
Route::resource('books', 'BooksController');

//Route::get('login', array('uses' => 'HomeController@showLogin'));
//Route::post('login', array('uses' => 'HomeController@doLogin'));

// Authentication routes...
Route::get('auth/login', 'Auth\LoginController@getLogin');
Route::post('auth/login', 'Auth\LoginController@postLogin');
Route::get('auth/logout', 'Auth\LoginController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\RegisterController@getRegister');
Route::post('auth/register', 'Auth\RegisterController@postRegister');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
