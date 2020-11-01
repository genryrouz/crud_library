<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use App\Models\Books;
use Illuminate\Support\Facades\DB;


class AuthorController extends Controller {
    public function submit(AuthorRequest $req) {
       
        $author = new Author();
        $author->surname = $req->input('surname');
        $author->author_name = $req->input('author_name');
        $author->email = $req->input('email');

        $author->save();

        return redirect()->route('admin-author-data')->with('success', 'Новый автор был добавлен.');
    }

    public function updateAuthor($id){
        $author = new Author();
        return view('update-author', ['data' => $author->find($id)]);
    }

    public function deleteAuthor($id) {
        Author::find($id)->delete();

        return redirect()->route('admin-author-data')->with('success', 'Автор был удален.');
    }

    public function updateAuthorSubmit($id, AuthorRequest $req) {
       
        $author = Author::find($id);
        $author->surname = $req->input('surname');
        $author->author_name = $req->input('author_name');
        $author->email = $req->input('email');

        $author->save();

        return redirect()->route('admin-author-data')->with('success', 'Автор был изменён.');
    }


    public function AllAuthors() {
        $au
        return view('admin_authors', ['data' => Author::all()]);
    }

    public function AuthorList() {
        return view('add_books', ['data' => Author::all()]);
    }

    public function showBooks($id){
        $author_books_list = DB::table('books')
                                                ->where('author_id', '=', $id)
                                                ->get();
        return view('show_books', ['data' => $author_books_list]);
    }

}
