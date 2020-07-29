@extends('layouts.dashpartner')


@section('content')


<div class="card card-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-success">
      <div class="widget-user-image">
        <img class="img-circle elevation-2" src="{{ asset('dashboard/dist/img/user7-128x128.png') }}" alt="User Avatar">
      </div>
      @foreach($datos as $data)
      <!-- /.widget-user-image -->
      <small class="float-right"><h5>Fecha Informe: {{ \Carbon\Carbon::parse($data->created_at)->format('m/Y')}}</h5></small>
      <h3 class="widget-user-username">Informe General de su Relación con el Fondo</h3>
      <h5 class="widget-user-desc"><strong>{{ Auth::user()->name }}</strong>&nbsp/&nbsp{{ Auth::user()->cedula }}</h5>
    </div>
  </div>


    <div class="row">









      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Informe  Aportes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Informe</th>

                  <th style="width: 40px">$</th>
                </tr>
              </thead>
              <tbody>
                  @csrf
                <tr>

                  <td>1.</td>
                  <td>Aportes</td>


                <td><span class="badge bg-secondary"><h6>${{ number_format($data->aportes,0) }}</h6></span></td>




                </tr>
                <tr>
                  <td>2.</td>
                  <td>Revalorizaciones</td>

                  <td><span class="badge bg-warning"><h6>${{ number_format($data->revalorizaciones,0) }}</h6></span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Ahorros</td>

                  <td><span class="badge bg-primary"><h6>${{ number_format($data->ahorros,0) }}</h6></span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Intereses</td>

                  <td><span class="badge bg-maroon"><h6>${{ number_format($data->intereses,0) }}</h6></span></td>
                </tr>

                <tr>
                    <td>5.</td>
                    <td><h5><strong>Total</strong></h5></td>

                    <td><span class="badge bg-success"><h6><strong>${{ number_format($data->aportes + $data->revalorizaciones + $data->ahorros + $data->intereses,0) }}</strong></h6></span></td>
                 </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">

          </div>

        </div>
        <!-- /.card -->



      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Informe Créditos</h3>

            <div class="card-tools">

            </div>


          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Informe</th>

                  <th style="width: 40px">$</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Crédito Ordinario</td>
                  <td><span class="badge bg-warning"><h6>${{ number_format($data->ordinario,0) }}</h6></span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Crédito Educativo</td>

                  <td><span class="badge bg-success"><h6>${{ number_format($data->educativo,0) }}</h6></span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Crédito de Vivienda</td>

                  <td><span class="badge bg-primary"><h6>${{ number_format( $data->vivienda,0) }}</h6></span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td><h5><strong>Total Deudas</strong></h5></td>

                  <td><span class="badge bg-danger"><h6><strong>${{ number_format( $data->ordinario + $data->vivienda + $data->educativo ,0) }}</strong></h6></span></td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
          <div class="card-footer clearfix">
          <a type="button" href="{{ route('reporte.pdf') }}" class="btn btn-block btn bg-secondary">Descarga Informe Pdf</a>
         </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->




  @endsection
