@extends('layout')

@section('content')

<nav class="navbar navbar-light bg-success">
    <span class="nav-title text-light">share time</span>
</nav>
<h1>{{ $user->name }}</h1>


<img src="{{ $user->profile_image }}" class="rounded-circle" width="200" ,height="200">
<article>
    <div class="body">{{ $user->name}}</div>
    <div class="body">{{ $user->introduction}}</div>

</article>

@if(Auth::user()->id === $user->id)
<a href="{{ route('logout') }}" class="btn btn-success" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

</div>
<a href="{{ route('articles.index') }}" class="btn btn-success">タイムライン</a>
<a href="{{ action('UsersController@edit', [$user->id]) }}" class="btn btn-success">

    編集
</a>

@endif
<hr />
@foreach($articles as $article)
<div class="card w-75">
    <div class="col">
        <a href="{{url('users',$article->user_id)}}"><img class="rounded-circle" width="50" height="50"
                src="{{ $article->user->profile_image }}"></a>
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






<div>


    @endsection
