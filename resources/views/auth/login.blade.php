@extends('layouts.vislogin')


@section('content')
<div class="wrap-login100">
    <div class="login100-pic js-tilt" data-tilt>
        <img src="logeo/images/img-01.png" alt="IMG">
    </div>


    <form class="login100-form" method="POST" action="{{ route('login') }}">
        @csrf
        <span class="login100-form-title">
            Ingreso
        </span>

        <div class="wrap-input100">
            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite Email" autofocus >
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

        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                {{ __('Login') }}
            </button>
        </div>



        <div class="text-center p-t-12">
            <a class="btn btn-link" href="{{ route('register') }}">
                Crear una Cuenta
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>

        </div>




        <div class="text-center p-t-136">


            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
             {{ __('Recordar la contraseña') }}
           </a>
           @endif
        </div>

    </form>
</div>
@endsection
