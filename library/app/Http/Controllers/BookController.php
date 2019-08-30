<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //not implement
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = Author::findOrFail($request->author_id);
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //not implement
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        Author::findOrFail($request->author_id);
        $book->update($request->all());
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(null, 204);
    }
    
    /**
     * Set Book giveout status
     * @param Book $book
     * @param bool $status
     * @return Illuminate\Http\Response
     */
    public function giveout(Book $book, bool $status)
    {
        $book->update(['is_giveout' => $status]);
        return $book;
    }
    
    /**
     * Show Books where find by title
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        return Book::where('title', 'LIKE', $request->title . '%')->get();
    }
}
