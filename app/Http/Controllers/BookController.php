<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Retrieve books based on user input for pagination and search.
        $perPage = $request->input('show', 10);
        $search = $request->input('search');

        $books = Book::with('author', 'category', 'ratings')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($subquery) use ($search) {
                    $subquery->where('title', 'like', "%$search%")
                        ->orWhereHas('author', function ($authorQuery) use ($search) {
                            $authorQuery->where('name', 'like', "%$search%");
                        });
                });
            })
            ->orderByDesc(DB::raw('(SELECT AVG(rating) FROM ratings WHERE book_id = books.id)'))
            ->paginate($perPage);

        return view('books.index', compact('books'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
