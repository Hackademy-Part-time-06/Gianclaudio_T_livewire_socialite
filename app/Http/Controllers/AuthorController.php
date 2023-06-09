<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'edit');
    }

    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(AuthorRequest $request)
    {
        Author::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'birthday' => $request->birthday,
            
        ]);

        return redirect()->route('authors.index')->with('success', 'Creazione avvenuta con successo!');
    }


    public function show(Author $author)
    {
        $books = Book::all();
        return view('authors.show', compact('author', 'books'));
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {


        $author->update([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'birthday' => $request->birthday,
        ]);

        return redirect()->route('authors.index')->with('success', 'Modifica avvenuta con successo!');
    }


    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Cancellazione avvenuta con successo!');
    }
}