@extends('layouts.app')
 
@section('content')
    <h1>Users</h1>
   
    
    
    <hr/>

   
        <article>
            <h2>
                <a href="{{ route('users.show', $user->id) }}">
                    
                    {{ $user->name }}
                    {{ $user->introduction}}
                   

                    
                   
                  
                </a>
                <img src="{{ $user->profile_image }}" width="150" ,height="150" >
            </h2>
        </article>
        <hr/>
        @foreach($articles as $article)
    <h2> {{ $article->food }}</h2>
    <h2> {{ $article->meet_place }}</h2>
    <h2> {{ $article->time }}</h2>
    <h2> {{ $article->created_at }}</h2>
    <img src="{{ $article->place_image }}" width="150" ,height="150" >
    @endforeach
    
@endsection