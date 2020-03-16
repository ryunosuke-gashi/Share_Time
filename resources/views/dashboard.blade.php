@extends('layout')

@section('content')


<nav class="navbar navbar-light bg-light fixed-top">
<h3 class="nav-title text-success my-auto mx-auto"> <img src="/images/icon.png" width="30",height="30">share time</h3>
</nav>






<body>
    <div class="dashboard">
        <div class="content">

            <container>
            
            <p class="text-center text-light">君はボッチ飯を回避できるかな？</p>
                <a href="{{ route('articles.index')}}" class="btn btn-md btn-outline-light rounded-pill w-75 py-2 my-2">始める</a>

               
            </container>


        </div>
    </div>
    </div>
</body>


@endsection
