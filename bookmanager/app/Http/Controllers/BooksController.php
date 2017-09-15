<?php

namespace App\Http\Controllers;

use App\Books;
use App\Authors;
use App\User;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all()->toArray();
        $authors = Authors::all()->toArray();

        return view('books.index', compact('books', 'authors'));
    }


    public function create()
    {
        return view('books.index');
    }

    public function store(Request $request)
    {
        $books = new Books([
            'title' => $request->get('title'),
            'author'=> $request->get('author')
        ]);

        $books->save();
        return redirect('/books');
    }


    public function edit($id)
    {
        $book = Books::find($id);
        return view('books.edit', compact('book', 'id'));
    }


    public function update(Request $request, $id)
    {
        $book = Books::find($id);
        $book->title = $request->get('title');
        $book->author = $request->get('firstname');
        $book->author = $request->get('lastname');

        $book->save();
        return redirect('/books');
    }

    public function destroy($id)
    {
        $book = Books::find($id);
        $book->delete();

        return redirect('/books');
    }
}

