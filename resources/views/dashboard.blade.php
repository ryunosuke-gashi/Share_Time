@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   頑張ってボッチ飯を回避しよう
                </div>
            </div>
        </div>
       
                <a href=" {{route('articles.index')}}" class="btn btn-primary float-right">始める</a>
    </div>
</div>
@endsection
