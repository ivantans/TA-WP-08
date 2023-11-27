<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index", [
            "books" => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            "judul" => $request->judul,
            "penerbit" => $request->penerbit,
            "stock" => $request->stock
        ];

        Book::create($data);
        return redirect("/books");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view("show", [
            "book" => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view("edit", [
            "book" => $book,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = [
            "judul" => $request->judul,
            "penerbit" => $request->penerbit,
            "stock" => $request->stock,
        ];

        Book::where("id", $book->id)
        ->update($data);

        return redirect("/books");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect("/books");
    }
}
