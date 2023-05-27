<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
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

    public function store(BookRequest $request)
    {

       $path_image = '';
       if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $path_name = $request->file('image')->getClientOriginalName();
        //$path_extension = $request->file('image')->getClientOriginalExtension();
        $path_image = $request->file('image')->storeAs('public/images/cover', $path_name);
    }

        Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'pages' => $request->pages,
            'image' => $path_image,
        ]);

        return redirect()->route('books.index')->with('success', 'Creazione avvenuta con successo!');
    }


    public function show(Book $book)
    {

        return view('books.show', compact('book'));
    }
}

