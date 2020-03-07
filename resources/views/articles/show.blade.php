@extends('layouts.app')
 
@section('content')
    <h1>{{ $article->title }}</h1>
 
    <hr/>
 
    <article>
        <div class="body">{{ $article->meet_place}}</div>
    </article>

    {!! Form::open(['method' => 'DELETE', 'url' => ['articles', $article->id], 'class' => 'd-inline']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        <a href="{{ action('ArticlesController@index') }}"
          class="btn btn-secondary float-right"
        >
            一覧へ戻る
        </a>
@endsection