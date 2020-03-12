@extends('layout')

@section('content')


@foreach($articles as $article)
<div class="row">
    <div class="col-3"></div>
    <div class="card col-6 pt-4">
        <div class="font-weight-bold">
            <a href="{{url('users',$article->user_id)}}"><img class="rounded-circle mr-1" width="50" height="50"
                    src="{{ $article->user->profile_image }}"></a>
            {{ $article->user->name }}
        </div>

        <div class="text-center">
            <h5 class="card-title">待ち合わせ場所：{{ $article->meet_place }}</h5>
            <h5 class="card-title">待ち合わせ時間：{{ $article->time }}</h5>
            <h5 class="card-text">何食べる？：{{ $article->food }}</h5>
            <img class="rounded" src="{{ $article->place_image }}" width="200" ,height="100">
        </div>
        <a href="{{ url('articles', $article->id) }}"><i class=" comment far fa-comment-dots fa-2x mr-0"></i></a>



    </div>
    <div class="col-3"></div>
</div>


<div class="container">
    <nav class="navbar bg-light fixed-bottom">
        <div class="row">
            <div class="col">
                <a href="{{ route('users.show', $user->id)}}" class="dropdown-item"><img class="rounded-circle"
                        width="40" height="40" src="{{ $user->profile_image }}"></a>
            </div>


            <a class="lunch" href=" {{route('articles.create')}}"><i class="fas fa-utensils fa-2x"></i></a>

        </div>




    </nav>
</div>




@endforeach

@endsection
