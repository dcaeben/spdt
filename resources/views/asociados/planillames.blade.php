@extends('layouts.dashboard')


@section('content')

<h5 class="text-dark">Planilla Mes</h5>

<div class="row">
    <div class="col-sm-6">
      <!-- select -->
      <div class="form-group">
        <label>Año</label>
        <select class="form-control">
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
          <option>2024</option>
        </select>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Mes</label>
        <select class="form-control">
          <option>Enero</option>
          <option>Febrero</option>
          <option>Marzo</option>
          <option>Abril</option>
          <option>Mayo</option>
        </select>
      </div>
    </div>
  </div>





<div class="row">

    <div class="col-12 col-sm-6 col-md-3">

      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Ahorros</span>
          <span class="info-box-number">
            $ 131.000

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
          <span class="info-box-text">Aportes-Acciones</span>
          <span class="info-box-number">$ 65.500</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->


    <!-- /.col -->

  </div>



  <!-- /.columna 2 -->

  <div class="row">
    <div class="col-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>Credito Vivienda</th>
          <th>Interes Vivienda</th>
          <th>Credito Educativo</th>
          <th>Interes Educativo </th>
          <th>Credito Ordinario</th>
          <th>Interes Ordinario</th>
          <th>Otros Descuentos</th>
          <th>Funerarios</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>$ 165.337</td>
          <td>$ 183.388</td>
          <td>$ </td>
          <td>$ </td>
          <td>$ </td>
          <td>$ </td>
          <td>$ </td>
          <td>$ 8.000</td>

        </tr>

        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>

  <div class="row">


    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total</span>
          <span class="info-box-number">$ 553.225</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->

  </div>





  @endsection
