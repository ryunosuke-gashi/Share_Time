@extends('layouts.app')
 
@section('content')
    <h1>{{ $user->name }}</h1>
 
    <hr/>
    <img src="{{ $user->profile_image }}" class="rounded-circle" width="200" ,height="200" >
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
    <a href="{{ action('UsersController@edit', [$user->id]) }}"
        class="btn btn-success"
        >
        
        編集
    </a>
    
    @endif
    <hr />
    
    
    @foreach($articles as $article)
    
    <h2> {{ $article->food }}</h2>
    <h2> {{ $article->meet_place }}</h2>
    <h2> {{ $article->time }}</h2>
    <h2> {{ $article->created_at }}</h2>
    <img src="{{ $article->place_image }}" width="150" ,height="150"> 
    
    
    
    
    
    
    @endforeach
    
    



<div>
    
       
@endsection