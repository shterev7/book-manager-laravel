<?php

namespace App\Http\Controllers;

use App\Authors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorsController extends Controller
{

    public function index()
    {
        if (Auth::guest()) {
            return redirect('/login');
        }
        else {


            $authors = Authors::all()->toArray();

            return view('authors.index', compact('authors'));
        }
    }

    public function create()
    {
        return view('authors.index');
    }

    public function store(Request $request)
    {
        $authors = new Authors([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname')
        ]);

        $authors->save();
        return redirect('/authors');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $author = Authors::find($id);
        return view('authors.edit', compact('author','id'));
    }


    public function update(Request $request, $id)
    {
        $author = Authors::find($id);
        $author->firstname = $request->get('firstname');
        $author->lastname = $request->get('lastname');
        $author->save();
        return redirect('/authors');
    }

    public function destroy($id)
    {
        $author = Authors::find($id);
        $author->delete();

        return redirect('/authors');
    }
}
