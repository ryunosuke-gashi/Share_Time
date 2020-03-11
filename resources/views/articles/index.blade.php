@extends('layout')

@section('content')

<nav class="navbar navbar-light bg-success">
    <div class="row">
        <a href="{{ route('users.show', $user->id)}}" class="dropdown-item"><img class="rounded-circle" width="50" height="50"
                src="{{ $user->profile_image }}" width="150" ,height="150"></a>
            </div>
            <a href=" {{route('articles.create')}}" class="btn btn-primary float-right">新規作成</a>
</nav>

@auth
@endauth


@foreach($articles as $article)
<div class="card">
   <div class="col-4">
        <a href="{{url('users',$article->user_id)}}"><img class="rounded-circle" width="50" height="50" src="{{ $article->user->profile_image }}" ></a>
        {{ $article->user->name }}
        </div>
        <div class="col">
        <h5 class="card-title">{{ $article->meet_place }}{{ $article->time }} {{ $article->created_at }}</h5>
        <p class="card-text"> {{ $article->food }}</p>
        <img src="{{ $article->place_image }}" width="10%" ,height="10%">
        </div>
        <div class="row">
        <a href="{{ url('articles', $article->id) }}" class="btn btn-success">コメントする</a>
        </div>
  
</div>

@endforeach

@endsection
