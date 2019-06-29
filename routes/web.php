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

Route::prefix('admin')->group(function () {
	Route::get('/dashboard', function () {
	    return view('dashboard.index');
	});
	
	Route::get('authors/data', 'AuthorController@data')->name('authors.data');
	Route::resource('/authors', 'AuthorController');

	Route::get('books/data', 'BookController@data')->name('books.data');
	Route::resource('/books', 'BookController');

	Route::get('members/data', 'MemberController@data')->name('members.data');
	Route::resource('/members', 'MemberController');

	Route::get('publishers/data', 'PublisherController@data')->name('publishers.data');
	Route::resource('/publishers', 'PublisherController');

	Route::get('rents/data', 'RentController@data')->name('rents.data');
	Route::resource('/rents', 'RentController');

	Route::get('type_books/data', 'TypeBookController@data')->name('type_books.data');
	Route::resource('/type_books', 'TypeBookController');

	Route::get('type_members/data', 'TypeMemberController@data')->name('type_members.data');
	Route::resource('/type_members', 'TypeMemberController');
});
