@extends('layout')

@section('content')

<nav class="navbar navbar-light bg-light fixed-top">
<h3 class="nav-title text-success my-auto mx-auto"> <img src="/images/icon.png" width="30",height="30">share time</h3>
</nav>


<div class="register mt-3">
    <div class="register-card col-9">
        
    <div class="text-light text-center"><h3>{{ __('Register') }}</h3></div>


                    <div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right text-light">{{ __('名前') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-3 col-form-label text-md-right text-light">{{ __('メールアドレス') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-3 col-form-label text-md-right text-light">{{ __('パスワード') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-3 col-form-label text-md-right text-light">{{ __('パスワード確認') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="univ_id"
                                    class="col-md-3 col-form-label text-md-right text-light">{{ __('大学名') }}</label>
                                <div class="col-md-6">
                                    <select name="univ_id">
                                        @foreach($univs as $univ)
                                        <option value="{{$univ->id}}">{{$univ->univ_name}}</option>
                                        @endforeach
                                    </select>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0 text-center">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn  btn-outline-light rounded-pill w-50">
                                        {{ __('Register') }}
                                    </button>

                                </div>
                            </div>

                    </div>
             
    </div>
</div>

@endsection
