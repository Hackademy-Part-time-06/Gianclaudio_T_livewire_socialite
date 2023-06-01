<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }

    public function store(Request $request){
        $image_original_name = $request->file('cover')->getClientOriginalName();

        // PROTECTED MASS ASSIGNMENT
        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'cover' => $request->file('cover')->storeAs('public/covers', "copertina-$image_original_name"),
        ]);

        return redirect(route('homepage'))->with('articleCreated', 'Hai correttamente inserito un articolo');
    }
}
