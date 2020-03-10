@extends('layouts.app')
 
@section('content')
    <h1>{{ $article->food }}</h1>
   
    <hr/>
 
    <article>
        <div class="body">{{ $article->meet_place}}</div>
        <div class="body">{{ $article->time}}</div>
        <div class="body">{{ $article->created_at}}</div>
        <div>
    <img src="{{ $article->place_image }}" width="100" ,height="100" >
 </div>
        
    </article>
    
@auth

    {!! Form::open(['method' => 'DELETE', 'url' => ['articles', $article->id], 'class' => 'd-inline']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

        {!! Form::open(['route' => ['comments.store',$article->id]]) !!}
        {{ Form::hidden('article_id',$article->id) }}
{!! Form::label('comment','コメントを入力してください') !!}
{!! Form::textarea('comment',old('comment')) !!}

{!! Form::submit('コメントする') !!}


{!! Form::close() !!}

@forelse($article->comments as $comment)
        {!! $comment->user->name !!}
       
        
        {!! nl2br(e($comment->comment)) !!}

    @empty

        <p>コメントはまだありません</p>

    @endforelse



        @endauth
        <a href="{{ action('ArticlesController@index') }}"
          class="btn btn-secondary float-right"
        >
            一覧へ戻る
        </a>
@endsection