@extends('layout')
 
@section('content')
    <h1>投稿する</h1>
 
    <hr/>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    {!! Form::open(['route' => 'articles.store']) !!}
        <div class="form-group">
            {!! Form::label('title', '何食べる？') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'どこで会う？') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('published_at', 'いつ？') !!}
            {!! Form::input('date', 'time', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>    
        <div class="form-group">
            {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection