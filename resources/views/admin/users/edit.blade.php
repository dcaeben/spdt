@extends('layouts.dashadmin')

@section('content')

<style>

    input[type="number"]
     {
    -webkit-appearance: textfield !important;
    margin: 0;
    -moz-appearance:textfield !important;
    }

</style>

<div class="container-fluid">
<div class="row">



  <div class="col-md-6">

<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Editar Usuario:</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ route('admin.users.update', $user) }}" method="POST">
      <div class="card-body">
        <div class="form-group">

            <label>Email</label>

          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>

        <div class="form-group">

            <label>Nombres y Apellidos</label>

          <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>


        <div class="form-group">

            <label>Cedula</label>

          <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ $user->cedula }}" required autofocus>

          @error('cedula')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">


        <!-- <button type="submit" class="btn btn-outline-success">Actualizar</button> -->
      </div>





  </div>

</div>




<div class="col-md-6">

<div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">Asignar Permisos</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">



        @csrf
        {{ method_field('PUT') }}

        @foreach($roles as $role)
        <li class="list-group-item">
        <div class="custom-control custom-radio">
        <b><input type="radio" name="roles[]" value="{{ $role->id }}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif>  <label>{{ $role->name }}</b><a class="float-right">{{ $role->description }}</a>
        </div>
        </li>

        @endforeach
        </div>

        <div class="card-footer">
         <div class="btn-group">
            <button type="submit" class="btn btn-outline-success float-left">Actualizar</button>

            <div style="margin-left: 3px !important;"></div>

           <a href="{{ route('admin.users.index' ) }}"><button type="button" class="btn btn-outline-primary">Volver</button></a>

          </div>

        </div>

        </div>




    </div>
    <!-- /.card-body -->


 </form>

  </div>
</div>


</div>
</div>






@endsection
