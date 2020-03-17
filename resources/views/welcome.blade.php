@extends('layout')

@section('content')

<body>
    <div class="welcome">
        <div class="content">
            <div class="title m-b-md">
                Share Time
            </div>

            <container>
            
                @auth
                <a href="{{ route('articles.index') }}" class="btn btn-md btn-outline-light rounded-pill w-75 py-2 mt-2">Login</a>

                <a href="{{ route('articles.index') }}" class="btn btn-md btn-outline-light rounded-pill w-75 py-2 my-4">Register</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-md btn-outline-light rounded-pill w-75 py-2 mt-2">Login</a>

                <a href="{{ route('register') }}" class="btn btn-md btn-outline-light rounded-pill w-75 py-2 my-4">Register</a>
                @endauth

            </container>


        </div>
    </div>
    </div>
</body>
