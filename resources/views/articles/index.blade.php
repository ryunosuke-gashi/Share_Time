@extends('layouts.app')
 
@section('content')
    <h1>Articles</h1>
    @auth
    <a href=" {{route('articles.create')}}" class="btn btn-primary float-right">新規作成</a>
    @endauth
    <hr/>
 
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ url('articles', $article->id) }}">
                    
                    {{ $article->food }}
                    {{ $article->meet_place }}
                    {{ $article->time }}
                    {{ $article->created_at }}
                    <img src="{{ $article->place_image }}" width="150" ,height="150" >
                   
                </a>
            </h2>
        </article>
    @endforeach
@endsection