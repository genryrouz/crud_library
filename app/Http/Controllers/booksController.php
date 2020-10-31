<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Books;


class BooksController extends Controller {

    public function submit(BookRequest $req) {
       
        $book = new Books();
        $book->name = $req->input('name');
        $book->id_author = $req->input('id_author');
        $book->pages_count = $req->input('pages_count');
        $book->charter_count = $req->input('charter_count');
        $book->publish_date = $req->input('publish_date');
        $book->city_publish_date = $req->input('city_publish_date');
        $book->dectiption_book = $req->input('dectiption_book');
        
        

        $book->save();

        return redirect()->route('admin-books-input')->with('success', 'Новая книга был добавлена.');
    }

    public function AllAuthors() {
        return view('admin_authors', ['data' => Author::all()]);
    }
   
}
