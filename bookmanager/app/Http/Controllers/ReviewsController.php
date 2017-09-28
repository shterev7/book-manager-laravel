<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Books;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request, $bookId)
    {
        $book = Books::find($bookId);
        $reviews = Review::all();
        return view('books.review_books', compact('book', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.review_books');
    }

    /**
     * @param Request $request
     * @param $book_id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, $id)
    {
        $book = Books::find($id);
        $review = new Review();
        $review->name = $request->get('name');
        $review->email = $request->get('email');
        $review->review = $request->get('review');
        $review->book()->associate($book);
        $review->save();

        //TODO: Redirect to reviews/{book_id}
        return redirect()->route('reviews.store', $book->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
