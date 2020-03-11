@extends('layout')

@section('content')

<div class="dashboard">
    <nav class="navbar navbar-light bg-light">
        <span class="nav-title text-success">Share Time</span>
    </nav>
    
        <div class="row justify-content-center dashboard-card">
            <div class="col-3">
                <div class="card" style="width: 18rem;">


                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <p class="text-center">頑張ってボッチ飯を回避しよう</p>
                            <div class="row">
                            <a href=" {{route('articles.index')}}"
                                class="btn btn-success float-left btn-sm mx-auto">始める</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
   
</div>
@endsection
