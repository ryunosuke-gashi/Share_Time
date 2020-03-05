@extends('layout')
 
@section('content')
    <h1>Articles</h1>
    <a href="articles" class="btn btn-primary float-right">新規作成</a>
    <hr/>
 
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ url('articles', $article->id) }}">
                    
                    {{ $article->food }}
                    {{ $article->meet_place }}
                    {{ $article->time }}
                </a>
            </h2>
        </article>
    @endforeach
@endsection