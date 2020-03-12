@extends('layout')

@section('content')

<nav class="navbar navbar-light bg-success">
    <h3 class="nav-title text-light my-auto">share time</h3>
</nav>

<div class="row">
    <div class="col-3"></div>
<div class="card col-6">
    <div class="font-weight-bold">
        <a href="{{url('users',$article->user_id)}}"><img class="rounded-circle" width="50" height="50"
                src="{{ $article->user->profile_image }}"></a>
        {{ $article->user->name }}
    </div>
    <div class="text-center">
        <h5 class="card-title">{{ $article->meet_place }}{{ $article->time }} {{ $article->food }}</h5>
        <p class="card-text"> {{ $article->created_at }}</p>
        <img src="{{ $article->place_image }}" width="10%" ,height="10%">
    </div>
    <div class="col-3"></div>
    </div>
    <div class="col">
        @if(Auth::user()->id === $article->user_id)
        <form method="POST" action="{{url('articles',$article->id)}}" accept-charset="UTF-8" class="d-inline"><input
                name="_method" type="hidden" value="DELETE">
            @csrf
            <input class="btn btn-danger" type="submit" value="削除">
        </form>
        @endif
    </div>
    <div class="col">
    <a href="{{ action('ArticlesController@index') }}" class="btn btn-success float-right">
    一覧へ戻る</a>
    </div>
    <div class="col">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            コメントする
        </button>
     
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">コメントする</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('comments.store',$article->id)}}" accept-charset="UTF-8">
                            @csrf
                            <input name="article_id" type="hidden" value="{{$article->id}}">
                            <label for="comment">コメントを入力してください</label>
                            <textarea name="comment" cols="50" rows="5" id="comment"></textarea>

                            <input type="submit" value="コメントする" class="btn btn-success">


                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>





@foreach($article->comments as $comment)









<div class="card w-75">
  <div class="card-body">
    <div class="card-title">
    <a href="{{url('users',$comment->user_id)}}"><img class="rounded-circle" width="50" height="50"
                src="{{ $comment->user->profile_image }}"></a>

    {!! $comment->user->name !!}

    </div>

    {!! nl2br(e($comment->comment)) !!}
  </div>
</div>
@endforeach



@endsection
