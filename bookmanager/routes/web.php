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
    return view('news');
});
// Dashboard route...
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Books and authors routes...
Route::resource('authors', 'AuthorsController');
Route::resource('books', 'BooksController');
//Route::post('books/{author_id}', ['uses' => 'BooksController@store', 'as' => 'books.store']);


// Search route...
Route::get('books/{q?}', 'BooksController@search')->where('q', '[\w\d]+');


// Review books routes...
Route::resource('reviews/{book_id}', 'ReviewsController');

Route::post('reviews/{book_id}', ['uses' => 'ReviewsController@store', 'as' => 'reviews.store']);


// Authentication routes...
Route::get('auth/login', 'Auth\LoginController@getLogin');
Route::post('auth/login', 'Auth\LoginController@postLogin');
Route::get('auth/logout', 'Auth\LoginController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\RegisterController@getRegister');
Route::post('auth/register', 'Auth\RegisterController@postRegister');




