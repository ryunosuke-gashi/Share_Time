@extends('layout')

@section('content')


<nav class="navbar navbar-light bg-light">
    <h3 class="nav-title text-success my-auto">Share Time</h3>
</nav>
<div class="dashboard">
        <div class="row justify-content-center dashboard-card">
            <div class="col-3">
                <div class="card" style="width: 18rem;">


                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <p class="text-center">君はボッチ飯を回避できるかな？</p>
                            <div class="row">
                            <a href=" {{route('articles.index')}}"
                                class="btn btn-success rounded-pill btn-md mx-auto">始める</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
   
</div>
@endsection
