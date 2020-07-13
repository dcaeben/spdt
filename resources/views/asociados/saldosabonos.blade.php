@extends('layouts.dashboard')


@section('content')

<h5 class="text-dark">Saldos y Abonos / Credito Ordinario</h5>

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

  </div>


<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Saldo</span>
          <span class="info-box-number">
            $ 24.309.601

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
          <span class="info-box-text">Total Abonos</span>
          <span class="info-box-number">$2.267.238</span>
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
          <span class="info-box-text">Saldo Actual</span>
          <span class="info-box-number">$ 22.042.363</span>
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
          <th>Abono Enero</th>
          <th>Abono Febrero</th>
          <th>Abono Marzo</th>
          <th>Abono Abril</th>
          <th>Abono Mayo</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>$ 445.333</td>
          <td>$ 449.333</td>
          <td>$ 453.333</td>
          <td>$ 457.333</td>
          <td>$ 461.906</td>
        </tr>

        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>


  @endsection
