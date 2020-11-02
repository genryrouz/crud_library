<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Books;
use App\Models\Author;
use Illuminate\Support\Facades\DB;


class BooksController extends Controller {

    public function submit(BookRequest $req) {
       
        $book = new Books();
        $book->name = $req->input('name');
        $book->authors_id = $req->input('authors_id');
        $book->pages_count = $req->input('pages_count');
        $book->charter_count = $req->input('charter_count');
        $book->publish_date = $req->input('publish_date');
        $book->city_publish_date = $req->input('city_publish_date');
        $book->dectiption_book = $req->input('dectiption_book');
        
        

        $book->save();

        return redirect()->route('admin-books-input')->with('success', 'Новая книга был добавлена.');
    }

    public function AllBooks() {

        $author_book = DB::select('Select * from authors, books where authors.id = books.authors_id', [1]);
        return view('admin_books', ['data' => $author_book]);
    }

    public function ShowBooksHome() {

        $author_book = DB::select('Select * from authors, books where authors.id = books.authors_id', [1]);
        return view('books', ['data' => $author_book]);
    }

    public function updateBook($id){
        $book = new Books();
        return view('update-book', ['data' => $book->find($id)], ['author' => Author::all()]);
    }

    public function updateBookSubmit($id, BookRequest $req) {
       
        $book = Books::find($id);
        $book->name = $req->input('name');
        $book->authors_id = $req->input('authors_id');
        $book->pages_count = $req->input('pages_count');
        $book->charter_count = $req->input('charter_count');
        $book->publish_date = $req->input('publish_date');
        $book->city_publish_date = $req->input('city_publish_date');
        $book->dectiption_book = $req->input('dectiption_book');
        
        

        $book->save();

        return redirect()->route('admin-books-input')->with('success', 'Книга была обновлена.');
    }

    public function deleteBook($id) {
        Books::find($id)->delete();

        return redirect()->route('admin-books')->with('success', 'Книга была удалена.');
    }

    public function showlistbook() {
        $authors = Books::with('authors')->withCount('authors')->get();
        return  json_encode($authors, JSON_UNESCAPED_UNICODE);
    }

    public function showBookSelectID($id) {
        return Books::find($id);
    }

    public function updateSelectBook($id, BookRequest $req) {
        $book = Books::find($id);
        $book->update($req->all());

        return $book;
    }

    public function deleteSelectBook($id) {
        $book = Books::find($id);
        $book->delete();

        return 204;
    }


   
}
