@extends('auth.master')

@section('addCss')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
    body {
    background: rgb(144,138,247);
    background: linear-gradient(175deg, rgba(144,138,247,1) 0%, rgba(0,255,243,1) 100%) !important;
    }
    .card-body {
        border-radius:10px;
        background: #88c2ff;
        position: fixed;
        padding: 50px;
    }
    .p {
        font-weight: bold;
        color: white;
    }
</style>
@endsection
<!-- /.login-logo -->
@section('content')

    <div class="card-body login-card-body">
        <p class="login-box-msg"><img src="{{asset('img/avatar.svg')}}" class="img-circle elevation-2" alt=""></p>
        <p class="login-box-msg display-5" >SMK N ANONYMOUS ID</p>

        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{old('email')}}" placeholder="Email" required autocomplete="email" autofocus>
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
                    placeholder="Password" name="password" required autocomplete="current-password">
                <div class="input-group-append input-group-text bg-info">
                    <span class="fa fa-lock"></span>
                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary ml-4 pt-2">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-light btn-block btn-flat text-black" style="border-radius: 10px">{{ __('Login') }}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <hr>

        @if (Route::has('register'))
        <p class="mb-4">
            <a class="text-white fw-bold text-center" href="{{ route('register') }}">{{ __('Belum punya akun? Daftar sekarang') }}</a>
        </p>
        @endif
        <hr>
        @if (Route::has('password.request'))
        <p class="mb-5">
            <a class="text-white fw-bold text-center"  href="{{ route('password.request') }}">{{ __('Lupa Password?') }}</a>
        </p>
        @endif
    </div>
    <!-- /.login-card-body -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

