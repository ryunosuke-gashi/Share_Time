@extends('layout')

@section('content')
<nav class="navbar navbar-light bg-light fixed-top">
    
    <a class="text-light" href="{{ route('articles.index') }}"><i class="fas fa-arrow-left text-success"></i></a>
    <h3 class="nav-title text-success my-auto mx-auto"> <img src="/images/icon.png" width="30"
            ,height="30">share time</h3>
</nav>



<div class="container user">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 pt-4">

            <div class="text-center">
            @if(isset($user->profile_image))
                <img src="{{ $user->profile_image }}" class="user-image" width="100" ,height="100">
                @else
                <img src="/images/Frame 3.png" class="user-image" width="100" ,height="100">
                @endif
            </div>
            <h1 class="pt-2">{{ $user->name }}</h1>

            <div>

                <div class="body py-1">
                    <h5>{{ $user->univ->univ_name}}</h5>
                </div>
                <div class="body">{{ $user->introduction}}</div>


            </div>

            <div class="p-1 m-1 text-right">
                @if(Auth::user()->id === $user->id)

                <a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-success m-2">
                    編集
                </a>
                @endif
            </div>
            
            
            
            
            
            @if(auth()->user()->id === $user->id)
            <input id="programming" type="radio" name="tab_item">
            <label class="tab_item" for="programming">コメントした記事</label>
            <input id="all" type="radio" name="tab_item" checked>
            <label class="tab_item" for="all">投稿した記事</label>
@else
            <input id="programming" type="radio" name="tab_item">
            <label class="tab_item" for="programming">あなたがコメントした記事</label>
            <input id="all" type="radio" name="tab_item" checked>
            <label class="tab_item" for="all">投稿した記事</label>
    @endif

          

            @foreach($articles as $article)
    

            <div class="tab_content p-0" id="all_content">


                <div class="font-weight-bold">
                 @if(isset($article->user->profile_image))
                    <a href="{{url('users',$article->user_id)}}"><img class="rounded-circle mr-1" width="50" height="50"
                            src="{{ $article->user->profile_image }}"></a>
                @else
                <a href="{{url('users',$article->user_id)}}"><img src="/images/Frame 3.png" class="rounded-circle mr-1" width="50",height="50"></a>
                @endif
                    {{ $article->user->name }}
                </div>

                <div class="pt-3">
                    <img class="rounded" src="{{ $article->place_image }}" width="100%" ,height="100%">

                    <a href="{{ url('articles', $article->id) }}"><i
                            class=" comment far fa-comment-dots fa-2x mr-0 pt-3"></i></a>
                    <hr />
                    <p class="card-title">待ち合わせ場所：{{ $article->meet_place }}</p>
                    <p class="card-title ">待ち合わせ時間：{{ $article->time }}</p>
                    <p class="card-text pb-3">何食べる？：{{ $article->food }}</p>
                </div>
                <hr/>
            </div>
            @endforeach

            @foreach($tweets as $tweet)
     
            <div class="tab_content p-0" id="programming_content">


                <div class="font-weight-bold">

                @if(isset($tweet->user->profile_image))
                    <a href="{{url('users',$tweet->article->user_id)}}"><img class="rounded-circle mr-1" width="50"
                            height="50" src="{{ $tweet->article->user->profile_image }}"></a>
                   
                @else
                <a href="{{url('users',$tweet->article->user_id)}}"><img class="rounded-circle mr-1" width="50"
                            height="50" src="{{ $tweet->article->user->profile_image }}"></a>
                @endif
                    {{ $tweet->article->user->name }}
                </div>

                <div class="pt-3">
                    <img class="rounded" src="{{ $tweet->article->place_image }}" width="100%" ,height="100%">

                    <a href="{{ url('articles', $tweet->article->id) }}"><i
                            class=" comment far fa-comment-dots fa-2x mr-0 pt-3"></i></a>
                    <hr />
                    <p class="card-title">待ち合わせ場所：{{ $tweet->article->meet_place }}</p>
                    <p class="card-title ">待ち合わせ時間：{{ $tweet->article->time }}</p>
                    <p class="card-text pb-3">何食べる？：{{ $tweet->article->food }}</p>
                </div>
                <hr/>
            </div>
            @endforeach


            <div class="col-md-2"></div>
        </div>
    </div>
</div>





























@endsection