<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::all(); //ottiene tutti i record presenti nella tabella books
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            "name" => "required|string",
            "pages" => "required|numeric",
            "author" => "required",
        ]);

        Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'pages' => $request->pages,
        ]);

        return redirect()->route('books.index')->with('success', 'Creazione avvenuta con successo!');
    }


    public function show(Book $book)
    {

        return view('books.show', compact('book'));
    }
}

