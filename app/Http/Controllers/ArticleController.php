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
        Article::create($this->validateArticle());
        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());
        return redirect($article->path());
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
