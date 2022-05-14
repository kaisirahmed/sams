@extends('layouts.applogin')
@section('title','Login')
@section('content')
<div class="login-content">
    <form method="POST" action="{{ route('login') }}" class="margin-bottom-0">
    @csrf
        <div class="form-group m-b-20">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group m-b-20">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="checkbox m-b-20">
            <label class="form-check-label" for="remember">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" checked="{{ old('remember') ? 'checked' : '' }}">{{ __('Remember Me') }}
            </label>
        </div>
        <div class="login-buttons">
            <button type="submit" class="btn btn-success btn-block btn-lg">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            
        </div>
        <div class="m-t-20">
            <strong class="text-white">Administrator Register? Click</strong> <a href="{{ route('register') }}">Register</a>
        </div>
    </form>
</div>
@endsection
