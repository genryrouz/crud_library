<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;

class AuthorController extends Controller {
    public function submit(AuthorRequest $req) {
       
        $author = new Author();
        $author->surname = $req->input('surname');
        $author->author_name = $req->input('author_name');
        $author->email = $req->input('email');

        $author->save();

        return redirect()->route('admin-author-data')->with('success', 'Новый автор был добавлен.');
    }

    public function AllAuthors() {
        return view('admin_authors', ['data' => Author::all()]);
    }

    public function AuthorList() {
        return view('add_books', ['data' => Author::all()]);
    }
}
