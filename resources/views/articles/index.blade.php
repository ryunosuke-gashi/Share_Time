@extends('layout')

@section('content')

<nav class="navbar navbar-light bg-light fixed-top">
    <h3 class="nav-title text-success my-auto mx-auto"> <img src="/images/icon.png" width="30",height="30">Home</h3>
   @if(isset($user->profile_image))
   <a href="{{ route('users.show', $user->id)}}" class="px-0"><img class="rounded-circle"
    width="40" height="40" src="{{ $user->profile_image }}"></a>
    @else
    <a href="{{ route('users.show', $user->id)}}" class="px-0"><img class="rounded-circle"
    width="40" height="40" src="/images/Frame 3.png"</a>
   
@endif

</nav>
<hr />


<div class="container article">
    @foreach($articles as $article)
    <div class="row">
       
        <div class="card col-md-6 offset-md-3 pt-4">
            <div class="font-weight-bold">
            @if(isset($article->user->profile_image))
                <a href="{{url('users',$article->user_id)}}"><img class="rounded-circle mr-1" width="50" height="50"
                        src="{{ $article->user->profile_image }}"></a>
                        @else
                        <a href="{{url('users',$article->user_id)}}"><img class="rounded-circle mr-1" width="50" height="50"
                        src="/images/Frame 3.png"></a>
            @endif
                {{ $article->user->name }}
            </div>

            <a  class="btn text-left" href="{{ route('articles.show', $article->id) }}">
            <div class="pt-3">
                <img class="rounded" src="{{ $article->place_image }}" width="100%" ,height="100%">

                <hr />
                <p class="card-title">待ち合わせ場所：{{ $article->meet_place }}</p>
                <p class="card-title ">待ち合わせ時間：{{ $article->time }}</p>
                <p class="card-text pb-3">何食べる？：{{ $article->food }}</p>
                <p class="card-title">{{ $article->created_at }}</p>
            </div>
        </a>

      
        

        </div>
        <div class="col-md-3"></div>
    </div>
    @endforeach
</div>



        


       
            <a class="lunch btn" href=" {{route('articles.create')}}"><i class="fas fa-paper-plane fa-3x"></i></a>
       







@endsection
