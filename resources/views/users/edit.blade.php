@extends('layout')

@section('content')
<nav class="navbar navbar-light bg-light fixed-top">
    <a class="text-success" href="{{ route('users.show',$user->id) }}"><i class="fas fa-arrow-left"></i></a>
    <h3 class="nav-title text-success my-auto mx-auto"> <img src="/images/icon.png" width="30" ,height="30">share time
    </h3>
</nav>

@if ($errors->any())
<ul class="alert alert-danger mt-5">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


<div class="container user-edit">

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">


            @if(isset($user->profile_image))
            <img src="{{ $user->profile_image }}" class="user-image d-block mx-auto" width="200" ,height="200">
            @else
            <img src="/images/Frame 3.png" class="user-image d-block mx-auto" width="200" ,height="200">
            @endif
            <div class="text-right">
                <a href="{{ route('logout') }}" class="btn btn-success" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <form method="POST" action="{{route('users.show',$user->id)}}" accept-charset="UTF-8"
                enctype="multipart/form-data"><input name="_method" type="hidden" value="PATCH">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" name="name" type="text" id="name">
                </div>
                <div class="form-group">
                    <label for="introduction">Introduction:</label>
                    <textarea class="form-control" name="introduction" cols="50" rows="5" id="introduction"></textarea>
                </div>

                <div class="form-group">
                    <label for="profile_image" class="control-label">profile image:</label><br>
                    <input name="profile_image" type="file" id="profile_image">
                </div>


                <div class="form-group">
                    <input class="btn btn-success form-control" type="submit" value="Edit User">
                </div>
            </form>

        </div>


        <div class="col-md-3"></div>
    </div>
</div>
@endsection