@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
@endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-bold is-size-4">New Article</h1>
            <form action="/articles" method="POST">
                @csrf
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input class="input @error('title') is-danger  @enderror" type="text" class="input" id="title"
                               name="title" value="{{old('title')}}">
                        @error('title')
                           <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="title" class="label">Excerpt</label>
                    <div class="control">
                        <textarea
                            class="textarea @error('body') is-danger @enderror"
                            class="textarea"
                            name="excerpt"
                            id="excerpt"
                            cols="30" rows="2">{{ old('except') }}</textarea>
                        @error('excerpt')
                           <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="title" class="label">Body</label>
                    <div class="control">
                        <textarea
                            class="textarea @error('body') is-danger @enderror"
                            class="textarea"
                            name="body"
                            id="excerpt"
                            cols="30" rows="10">{{ old('body') }}</textarea>
                        @error('body')
                           <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
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
