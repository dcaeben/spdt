@extends('layouts.vislogin')


@section('content')
<div class="wrap-login1002">
    <div class="login100-pic js-tilt" data-tilt>
        <img src="logeo/images/img-01.png" alt="IMG">
    </div>


    <div class="login100-form">
        @csrf
        <span class="login1002-form-title">
            Ya estas Registrado
        </span>


        <div class="wrap-input100">
        <h5 style="text-align: center;">Pronto nos comunicaremos para que puedas acceder a tu cuenta</h5>

        </div>



        <div class="container-login100-form-btn">
            <a class="login100-form-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             Salir
            </a>
        </div>



    </div>
</div>
@endsection
