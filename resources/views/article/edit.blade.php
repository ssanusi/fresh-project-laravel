@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
@endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-bold is-size-4">Update Article</h1>
            <form action="/articles/{{$article->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text" class="input" id="title" name="title" value={{ $article->title }}>
                    </div>
                </div>
                <div class="field">
                    <label for="title" class="label">Excerpt</label>
                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt" cols="30" rows="2">{{ $article->excerpt }}</textarea>
                    </div>
                </div>
                <div class="field">
                    <label for="title" class="label">Body</label>
                    <div class="control">
                        <textarea class="textarea" name="body" id="excerpt" cols="30" rows="10">{{ $article->body }}</textarea>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

