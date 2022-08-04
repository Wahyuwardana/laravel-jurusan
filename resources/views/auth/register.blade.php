@extends('auth.master')


@section('addCss')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
    body {
        background: linear-gradient(175deg, rgba(144,138,247,1) 0%, rgba(0,255,243,1) 100%) !important;
    }
    .card-body {
        border-radius:10px;
        background:transparent;
        position: fixed;
    }
    .p {
        font-weight: bold; 
        color: white;
    }
</style>
@endsection
@section('content')

    <div class="card-body login-card-body">
        <div class="card-body login-card-body">
            <p class="login-box-msg"><img src="{{asset('img/avatar.svg')}}" class="img-circle elevation-2" alt=""></p>
            <p class="login-box-msg display-5" style="">Silahkan Daftar</p>

        <form action="{{route('register')}}" method="post">
            @csrf

            <div class="input-group mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Full name" name="name" value="{{ old('name') }}" required autocomplete="name"
                    autofocus>
                <div class="input-group-append input-group-text bg-info">
                    <span class="fa fa-user"></span>
                </div>
            </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{old('email')}}" placeholder="Email" required autocomplete="email">
                <div class="input-group-append input-group-text bg-info">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" name="password" required autocomplete="new-password">
                <div class="input-group-append input-group-text bg-info">
                    <span class="fa fa-lock"></span>
                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" placeholder="Retype password"
                    name="password_confirmation" required autocomplete="new-password">
                <div class="input-group-append input-group-text bg-info">
                    <span class="fa fa-lock"></span>
                </div>
            </div>

            <div class="row">
                <div class="offset-8">
                    <button type="submit" class="btn btn-light btn-block btn-flat" style="border-radius: 10px;">{{ __('Register') }}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        @if (Route::has('login'))
        <hr>
        <p class="mb-0 text-center">
            <a href="{{ route('login') }}" class="text-center text-white fw-bold">{{ __('Sudah punya akun? Login sekarang') }}</a>
        </p>
        @endif
    </div>
    <!-- /.login-card-body -->
@endsection
