@extends('layouts.app')
 
@section('content')
    <h1>{{ $user->name }}</h1>
 
    <hr/>
    <img src="{{ $user->profile_image }}" width="150" ,height="150" >
    <article>
        <div class="body">{{ $user->name}}</div>
    </article>
    <div>
        <a href="{{ action('UsersController@edit', [$user->id]) }}"
          class="btn btn-primary"
        >
            編集
        </a>
 
        <a href="{{ action('UsersController@index') }}"
          class="btn btn-secondary float-right"
        >
            一覧へ戻る
        </a>
    </div>
@endsection