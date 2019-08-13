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
    //return view('library.home');
});
Route::get('/logina',function(){
	return view('library.auth.login');
});

Auth::routes();
Route::get('/authors/create', 'authors@create')->name('addAuthor');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/authors','authors@store')->name('storeAuthor');
Route::get('/authors/view','authors@view')->name('veiwAuthor');
Route::get('/authors/{aid}','authors@viewbooks')->name('authorsBooks');
Route::get('/books/create', 'books@create')->name('createBook');
Route::post('/books/','books@store')->name('storeBook');
Route::get('/books/view','books@view')->name('viewBooks');
Route::get('/books/{id}','books@fullview')->name('viewFullBook');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
