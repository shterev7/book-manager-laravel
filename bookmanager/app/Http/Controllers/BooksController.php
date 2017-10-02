<?php

namespace App\Http\Controllers;

use App\Books;
use App\Authors;
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
                $books = Books::all();
                $authors = Authors::all();

                return view('books.index_books', ['results' => $books, 'authors' => $authors ]);
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

    public function show()
    {
        //
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

    public function search(Request $request)
    {
        $q = $request->query('q');
//        $author = Authors::all();

        $results = Books::where('title', 'like', "%$q%")
                   ->orWhere(Authors::all('firstname'), 'like', "%$q%")
                   ->orWhere(Authors::all('lastname'), 'like', "%$q%");

//        $results = Books::where('title', 'like', "%$q%")
//            ->orWhereHas('author', function ($query) {
//        $query->where('firstname', 'like', "%q%")
//            ->orWhereHas('lastname', 'like', "%q%");
//})->get();



//            ->orWhere($author->firstname, 'like', "%$q%")
//            ->orWhere($author->lastname, 'like', "%$q%");


        return view('books.index_books', ['results' => $results,'q' => $q]);

    }
}

