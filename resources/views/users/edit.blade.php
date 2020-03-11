@extends('layouts.app')

@section('content')
    <h1>Edit: {{ $user->name }}</h1>

    <hr/>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.show', $user->id],'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('introduction', 'Introduction:') !!}
        {!! Form::textarea('introduction', null, ['class' => 'form-control']) !!}
    </div>
   
    <div class="form-group">
        {!! Form::label('profile_image', '画像', ['class' => 'control-label']) !!}
        {!! Form::file('profile_image') !!}
    </div>
   
    
    <div class="form-group">
        {!! Form::submit('Edit User', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

@endsection