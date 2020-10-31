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
});

Route::get('/authors', function () {
    return view('authors');
});

Route::get('/books', function () {
    return view('books');
});


Route::get('/adminpanel/home', function () {
    return view('admin_home');
});

Route::get('/adminpanel/books', function () {
    return view('admin_books');
});

Route::get('/adminpanel/authors', function () {
    return view('admin_authors');
});

Route::get('/adminpanel/authors/addauthor', function () {
    return view('add_authors');
});

Route::get('/adminpanel/books/addbook', function () {
    return view('add_books');
});

Route::get('/adminpanel/authors/showbooklist', function () {
    return view('show_books');
});