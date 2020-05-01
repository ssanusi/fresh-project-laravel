@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                @forelse($articles as $article)
                    <div class="content">
                        <div class="title">
                            <h2><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></h2>
                        </div>
                        <p><img src="images/banner.jpg" alt="" class="image image-full"></p>
                        {!! $article->excerpt !!}
                    </div>
                @empty
                    <p>No Articles Yet</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
