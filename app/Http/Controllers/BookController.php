<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    public function index()
    {

        $books = Book::all(); //ottiene tutti i record presenti nella tabella books
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
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
            'author_id' => $request->author_id,
            'pages' => $request->pages,
            'image' => $path_image,
        ]);

        return redirect()->route('books.index')->with('success', 'Creazione avvenuta con successo!');
    }


    public function show(Book $book)
    {

        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function update(BookRequest $request, Book $book)
    {
        $path_image = $book->image;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images/cover', $path_name);
        }

        $book->update([
            'name' => $request->input('name'),
            'author_id' => $request->author,
            'pages' => $request->pages,
            'image' => $path_image
        ]);

        return redirect()->route('books.index')->with('success', 'Modifica avvenuta con successo!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Cancellazione avvenuta con successo!');
    }
}

