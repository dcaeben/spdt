@extends('layouts.dashboard')


@section('content')

<h5 class="text-dark">Totales</h5>

<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Aportes</span>
          <span class="info-box-number">
            $ 2.441.400

          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Revalorizaciones</span>
          <span class="info-box-number">$ 51.136</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Ahorros</span>
          <span class="info-box-number">$ 3.099.400</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Intereses Ahorros</span>
          <span class="info-box-number">$ 268.443</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>



  <!-- /.columna 2 -->

  <div class="row">

    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box bg-gradient-success">
        <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total</span>
          <span class="info-box-number">$ 5.860.379</span>

        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->

    <!-- /.col -->
  </div>


  @endsection
