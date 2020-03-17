@extends('layout')

@section('content')


<nav class="navbar navbar-light bg-light fixed-top">
<a class="text-success" href="{{ url('/') }}"><i class="fas fa-arrow-left"></i></a>
<h3 class="nav-title text-success my-auto mx-auto"> <img src="/images/icon.png" width="30",height="30">share time</h3>
</nav>

<div class="login">
    <div class="login-card col-9">
        
            <div class="text-light text-center mb-4"><h3>{{ __('Login') }}</h3></div>

                    <div>
                        <form method="POST" action="{{route('login')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-3 col-form-label text-md-right text-light">{{ __('メールアドレス') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            <p class="text-light">{{ __('パスワードを保存する') }}</p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 text-center">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn  btn-outline-light rounded-pill w-50">
                                        {{ __('Login') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
              
    </div>

</div>





@endsection
