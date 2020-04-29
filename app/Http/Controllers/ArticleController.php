<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index', ['articles' => Article::all()]);
    }
    public function show($articleId)
    {
        return view('article.show', ['article' => Article::find($articleId) ]);
    }

    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/articles');
    }
}
