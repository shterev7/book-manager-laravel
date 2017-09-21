<?php

namespace App\Http\Controllers;

use App\Books;
use App\Authors;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            return redirect('/login');
        }
        else
            {
                $books = Books::all()->toArray();
                $authors = Authors::all()->toArray();

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

        $books = new Books();
        //        $authors = Authors::find($id);

        $books->title = $request->get('title');
//        $books->author()->get('firstname');
//        $books->author()->get('lastname');
        $books->author_id = $request->get('author_id');



//        if (is_object($books) && property_exists($books, 'title')) {
//            $books->title = $request->get('title');
//        }
//        if (is_object($books) && property_exists($books, 'author_id')) {
//
//            $books->author()->associate('Authors');
//        }

//        dd($books->author());

//        $books->author=Authors::all()->toArray();

//        $books->author->firstname = $request->get('firstname');
//        $books->author->lastname = $request->get('lastname');

//        $books->author->firstname = $request->$authors('firstname');
//        $books->author->lastname = $request->$authors('lastname');

//        $books= new Books([
//            'title' => $request->get('title'),
//            'author'=> $request->get('author')
//        ]);
        $books->save();

        return redirect('/books');

//        $books->author['firstname'] = $request->get('firstname');
//        $books->author['lastname'] = $request->get('lastname');

    }


    public function edit($id)
    {
        $book = Books::find($id);
        return view('books.edit_books', compact('book', 'id'));
    }


    public function update(Request $request, $id)
    {
        $book = Books::find($id);
        $book->title = $request->get('title');
        $book->author()->firstname = $request->get('firstname');
        $book->author()->lastname = $request->get('lastname');

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

