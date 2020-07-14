@extends('layouts.vislogin')


@section('content')
<div class="wrap-login1002">
    <div class="login100-pic js-tilt" data-tilt>
        <img src="{{ asset('logeo/images/img-01.png') }}" alt="IMG">
    </div>


    <form class="login100-form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <span class="login100-form-title">
            Reiniciar Password
        </span>

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif


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





        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                {{ __('Enviar') }}
            </button>
        </div>




    </form>
</div>
@endsection
