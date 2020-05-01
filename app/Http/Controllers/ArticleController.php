<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrfail()->articles;
        }
        else {
            $articles = Article::latest()->get();
        }
        return view('article.index', ['articles' => $articles]);
    }
    public function show($articleId)
    {
        return view('article.show', ['article' => Article::find($articleId) ]);
    }

    public function create()
    {
        return view('article.create', ['tags' => Tag::all()]);
    }

    public function store()
    {
        $this->validateArticle();
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect(route('articles.index'));
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
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
