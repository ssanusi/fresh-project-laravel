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
}
