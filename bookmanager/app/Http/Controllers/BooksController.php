<?php

namespace App\Http\Controllers;

use App\Books;
use App\Authors;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Input;

class BooksController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            return redirect('/login');
        }
        else
            {
                $books = Books::all();
                $authors = Authors::all();

                return view('books.index_books', compact('books', 'authors'));
            }
    }


    public function create()
    {
        return view('books.index_books');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $author = Authors::find($request->get('author_id'));
        $books = new Books();

        $books->title = $request->get('title');
        $books->author()->associate($author);


        $books->save();

        return redirect('/books');

    }


    public function edit($id)
    {
        $book = Books::find($id);
        $authors = Authors::all();
        return view('books.edit_books', compact('book', 'id', 'authors'));
    }


    public function update(Request $request, $id)
    {
        $author = Authors::find($request->get('author_id'));
        $book = Books::find($id);
        $book->title = $request->get('title');
        $book->author()->associate($author);
        //TODO: Find The author by ID and Associate it with the book!

        $book->save();
        return redirect('/books');
    }

    public function destroy($id)
    {
        $book = Books::find($id);
        $book->delete();

        return redirect('/books');
    }

    public function search()
    {
        $search= Input::get('q');
        $result= Books::where('title', 'LIKE', 'q'. $search .'q')->first();

        if ($result->first()) {

            $books= Books::where('title', 'LIKE', 'q'. $search .'q');

            return view('books.index_books', compact('books'));
        }
        else {

            $books = Books::orderBy('title', 'asc');

            return view('books.index_books', compact('books'));
        }

    }
}

