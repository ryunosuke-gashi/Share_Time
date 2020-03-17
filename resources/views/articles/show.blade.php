@extends('layout')

@section('content')

<nav class="navbar navbar-light bg-light fixed-top">
    <a class="text-success" href="{{ route('articles.index') }}"><i class="fas fa-arrow-left"></i></a>
    <h3 class="nav-title text-success my-auto mx-auto"> <img src="/images/icon.png" width="30" ,height="30">share time
    </h3>
</nav>

<div class="container article">
    @if (session('message'))
    <div class="alert alert-success text-center message">{{ session('message') }}</div>
    @endif


    <div class="row">
        <div class="card col-md-6 offset-md-3">
            <div class="card-body">
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
                <div class="pt-3">
                    <img class="rounded" src="{{ $article->place_image }}" width="100%" ,height="100%">


                    <hr />
                    <p>待ち合わせ場所：{{ $article->meet_place }}</p>
                    <p>待ち合わせ時間：{{ $article->time }}</p>
                    <p>何食べる？：{{ $article->food }}</p>
                </div>

                <a type="button text-left" data-toggle="modal" data-target="#commentModal"><i
                        class="comment far fa-comment-dots fa-2x mx-2"></i></a>


                @if(Auth::user()->id === $article->user_id)
                <a type="button" data-toggle="modal" data-target="#deleteModal"><i
                        class="delete far fa-trash-alt fa-2x"></i><a>

                        @endif





            </div>
        </div>
    </div>

    <!-- CommentModal -->
    <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="commentModalLabel">コメントする</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('comments.store',$article->id)}}" accept-charset="UTF-8">
                        @csrf
                        <input name="article_id" type="hidden" value="{{$article->id}}">
                        <label for="comment">コメントを入力してください</label>
                        <div class="text-center">
                            <textarea name="comment" cols="40" rows="5" id="comment"></textarea>
                            <input type="submit" value="コメントする" class="btn btn-success">
                        </div>


                    </form>
                </div>

            </div>
        </div>

    </div>










<!-- DeleteModal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">投稿を削除しますか？</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                <form method="POST" action="{{url('articles',$article->id)}}" accept-charset="UTF-8" class="d-inline">
                    <input name="_method" type="hidden" value="DELETE">
                    @csrf
                    <input class="btn btn-danger" type="submit" value="削除">
                </form>
            </div>
        </div>
    </div>
</div>






@foreach($article->comments as $comment)
<div class="row">
    <div class="card col-md-6 offset-md-3">
        <div class="card-body">
        <div class="font-weight-bold">
            @if(isset($comment->user->profile_image))
            <a href="{{url('users',$comment->user_id)}}"><img class="rounded-circle" width="50" height="50"
                    src="{{ $comment->user->profile_image }}"></a>
            @else
            <a href="{{url('users',$comment->user_id)}}"><img class="rounded-circle mr-1" width="50" height="50"
                    src="/images/Frame 3.png"></a>
            @endif


            {!! $comment->user->name !!}
            </div>
            <div>
                <h5 class="pt-3">{!! nl2br(e($comment->comment)) !!}</h5>
            </div>
        </div>
    </div>

</div>
@endforeach
</div>
@endsection
