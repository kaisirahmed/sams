@extends('layouts.applogin')
@section('title','Registration')
@section('content')
<div class="login-content">
    <form method="POST" action="{{ route('register') }}" class="margin-bottom-0">
    @csrf
        <div class="form-group m-b-20">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

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

        <div class="form-group m-b-20">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="login-buttons">
            <button type="submit" class="btn btn-success btn-block btn-lg">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>

@endsection
