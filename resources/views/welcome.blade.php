@extends('layout')

@section('content')

<body>
    <div class="welcome">
        <div class="content">
            <div class="title m-b-md">
                Share Time
            </div>

            <container>

                <a href="{{ route('login') }}" class="btn btn-md btn-outline-light rounded-pill w-75 py-2 my-2">Login</a>

                <a href="{{ route('register') }}" class="btn btn-md btn-outline-light rounded-pill w-75 py-2 my-2">Register</a>

            </container>


        </div>
    </div>
    </div>
</body>
