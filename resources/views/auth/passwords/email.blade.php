@extends('layouts.applogin')
@section('title','Send Password Reset Link')
@section('content')
<div class="login-content">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
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
         
        <div class="login-buttons">
            <button type="submit" class="btn btn-success btn-block btn-lg">
                {{ __('Send Password Reset Link') }}
            </button>
         </div>
    </form>
</div>
@endsection
