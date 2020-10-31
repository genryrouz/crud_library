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

Route::get('/adminpanel/authors', function () {
    return view('admin_authors');
})->name('admin-authors');

Route::get('/adminpanel/authors/addauthor', function () {
    return view('add_authors');
})->name('admin-authors-input');

Route::get('/adminpanel/books/addbook', function () {
    return view('add_books');
})->name('admin-books-input');

Route::get('/adminpanel/authors/showbooklist', function () {
    return view('show_books');
})->name('admin-books-showlist');