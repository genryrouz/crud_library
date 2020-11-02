<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Books;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/books/list', 'BooksController@showlistbook');
Route::get('/v1/books/by-{id}', 'BooksController@showBookSelectID');
Route::post('/v1/books/update/{id}', 'BooksController@updateSelectBook');
Route::get('/v1/books/delete/{id}', 'BooksController@deleteSelectBook');