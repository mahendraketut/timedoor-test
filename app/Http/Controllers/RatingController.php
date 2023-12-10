<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Http\Requests\StoreRatingRequest;
use App\Http\Requests\UpdateRatingRequest;
use App\Models\Author;
use App\Models\Book;
// use GuzzleHttp\Psr7\Request;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    // to enhancing the user experience, getBook method
    // will be used to avoiding bad UX due to the system
    // need a lot of time to load all data
    public function getBook(Author $author)
    {
        // retrieve books data based on the author selected. return it as a json format
        $books = $author->books;
        return response()->json($books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // show create rating page with retrieving authors and book data
        $authors = Author::all();
        $books = Book::all();
        return view('rating.insertRating', compact('authors', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRatingRequest $request)
    {
        // Add validation rules for the request parameters.
        $request->validate([
            'rating' => 'required',
            'book_id' => 'required',
            'author_id' => 'required'
        ]);

        // Add a new rating.
        $rating = new Rating;
        $rating->rating = $request->rating;
        $rating->book_id = $request->book_id;
        $rating->save();

        // Redirect with success message.
        return redirect()->route('book.index')->with('success', 'Rating has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRatingRequest $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
