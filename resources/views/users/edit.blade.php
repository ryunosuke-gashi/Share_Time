@extends('layout')

@section('content')
<nav class="navbar navbar-light bg-success">
    <span class="nav-title text-light">share time</span>
</nav>


<hr />

@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<div class="user-edit">
    <div class="container user-edit-card">
        <div class="row justify-content-center">
            <div class="col-mx-auto">
                <div class="card" style="width: 30rem;">
                    <div class="card-body justify-content-center">
<img src="{{ $user->profile_image }}" class="rounded-circle d-block mx-auto" width="200" ,height="200">
                        <form method="POST" action="{{route('users.show',$user->id)}}" accept-charset="UTF-8"
                            enctype="multipart/form-data"><input name="_method" type="hidden" value="PATCH">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input class="form-control" name="name" type="text" value="ryunosuke" id="name">
                            </div>
                            <div class="form-group">
                                <label for="introduction">Introduction:</label>
                                <textarea class="form-control" name="introduction" cols="50" rows="10"
                                    id="introduction"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="profile_image" class="control-label">画像</label>
                                <input name="profile_image" type="file" id="profile_image">
                            </div>


                            <div class="form-group">
                                <input class="btn btn-success form-control" type="submit" value="Edit User">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endsection
