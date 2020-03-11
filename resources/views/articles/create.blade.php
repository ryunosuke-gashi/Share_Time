@extends('layout')
@section('content')
<nav class="navbar navbar-light bg-success">
    <span class="nav-title text-light">share time</span>
</nav>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="article-create">
    <div class="container article-create-card">
        <div class="row justify-content-center">
            <div class="col-mx-auto">
                <div class="card" style="width: 30rem;">
                    <div class="card-body justify-content-center">
                        <form method="post" action="{{ route('articles.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            @CSRF
                            <div class="form-group">
                                <label for="time">いつ暇？</label>
                                <input class="form-control" name="time" type="text" id="time">
                            </div>
                            <div class="form-group">
                                <label for="food">何食べる？</label>
                                <input class="form-control" name="food" type="text" id="food">
                            </div>
                            <div class="form-group">
                                <label for="meet_place">どこで会う？</label>
                                <input class="form-control" name="meet_place" type="text" id="meet_place">
                            </div>
                            <div class="form-group">
                                <label for="place_image" class="control-label">待ち合わせ場所を画像投稿しよう
                                <input type="file" name="place_image">
                                </label>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success form-control" type="submit" value="投稿する">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection