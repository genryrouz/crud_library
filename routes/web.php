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

Route::get('/authors',
 'AuthorController@ShowAuthorsHome')
 ->name('authors'); 

 Route::get('/books',
 'BooksController@ShowBooksHome')
 ->name('books'); 

Route::get('/adminpanel/home', function () {
    return view('admin_home');
})->name('admin-panel');

Route::get('/adminpanel/authors/addauthor', function () {
    return view('add_authors');
})->name('admin-authors-input');


Route::post('/adminpanel/books/addbook/submit', 
'BooksController@submit')
->name('admin-book-submit'); 

Route::get('/adminpanel/books', 
'BooksController@AllBooks')
->name('admin-books'); 

Route::get('/adminpanel/books/{id}/delete',
 'BooksController@deleteBook')
 ->name('books-delete'); 

Route::get('/adminpanel/authors/{id}/booklist',
 'AuthorController@showBooks')
 ->name('admin-books-showlist'); 

Route::get('/adminpanel/books/{id}/update',
 'BooksController@updateBook')
 ->name('books-update');

 Route::get('/adminpanel/authors/{id}/update',
 'AuthorController@updateAuthor')
 ->name('author-update');

 Route::get('/adminpanel/authors/{id}/delete',
 'AuthorController@deleteAuthor')
 ->name('author-delete'); 

 Route::post('/adminpanel/authors/{id}/update',
 'AuthorController@updateAuthorSubmit')
 ->name('author-update-submit');

Route::post('/adminpanel/books/{id}/update', 
'BooksController@updateBookSubmit')
->name('books-update-submit');

Route::get('/adminpanel/authors/all',
 'AuthorController@AllAuthors')
 ->name('admin-author-data'); 

Route::get('/adminpanel/books/addbook', 
'AuthorController@AuthorList')
->name('admin-books-input'); 

Route::post('/adminpanel/books/authors/submit',
 'AuthorController@submit')
 ->name('admin-author-submit'); 