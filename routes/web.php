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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/authors', function () {
    return view('authors');
})->name('authors');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/adminpanel/home', function () {
    return view('admin_home');
})->name('admin-panel');

Route::get('/adminpanel/books', function () {
    return view('admin_books');
})->name('admin-books');


Route::get('/adminpanel/authors/addauthor', function () {
    return view('add_authors');
})->name('admin-authors-input');



Route::get('/adminpanel/authors/showbooklist', function () {
    return view('show_books');
})->name('admin-books-showlist');

Route::post('/adminpanel/books/addbook/submit', 'BooksController@submit')->name('admin-book-submit'); 

Route::get('/adminpanel/authors/all', 'AuthorController@AllAuthors')->name('admin-author-data'); 

Route::get('/adminpanel/books/addbook', 'AuthorController@AuthorList')->name('admin-books-input'); 

Route::post('/adminpanel/books/authors/submit', 'AuthorController@submit')->name('admin-author-submit'); 