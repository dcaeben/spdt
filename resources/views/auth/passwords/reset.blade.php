@extends('layouts.vislogin')


@section('content')
<div class="wrap-login100">
    <div class="login100-pic js-tilt" data-tilt>
        <img src="logeo/images/img-01.png" alt="IMG">
    </div>


    <form class="login100-form" method="POST" action="{{ route('password.update') }}">
        @csrf
        <span class="login100-form-title">
            Reiniciar Password
        </span>

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="wrap-input100">
            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Digite Email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>

        <div class="wrap-input100">
            <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Digite Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror

            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>

        <div class="wrap-input100">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="wrap-input100">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>



        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                {{ __('Reset Password') }}
            </button>
        </div>




    </form>
</div>
@endsection
