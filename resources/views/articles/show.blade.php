@extends('layout')
 
@section('content')
    <h1>{{ $article->title }}</h1>
 
    <hr/>
 
    <article>
        <div class="body">{{ $article->meet_place}}</div>
    </article>
@endsection