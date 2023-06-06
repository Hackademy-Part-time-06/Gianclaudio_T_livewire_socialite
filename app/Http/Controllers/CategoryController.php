<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
    }
    
    public function index()
    {

        $categorys = Category::all(); //ottiene tutti i record presenti nella tabella category
        return view('categorys.index', ['categorys' => $categorys]);
    }

    public function create()
    {
        return view('categorys.create');
    }

    public function store(CategoryRequest $request)
    {

       Category::create([
            'name' => $request->name,
            
        ]);

        return redirect()->route('categorys.index')->with('success', 'Creazione avvenuta con successo!');
    
}

public function show(Category $category)
{
    
    return view('categorys.show', compact('category'));
    
}

public function edit(Category $category)
{
    return view('categorys.edit', ['category'=>$category]);
}

}

