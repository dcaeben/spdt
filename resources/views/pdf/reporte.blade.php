<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Invoice Print</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
  </head>
  <body>
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        @foreach($datos as $data)
        @csrf
      <div class="row">
        <div class="col-12">
            <p align="right">Fecha de Informe:{{ \Carbon\Carbon::parse($data->created_at)->format('m/Y')}}</p></br>
          <h2 class="page-header" align="center">FONDO DE EMPLEADOS REGINAL CAUCA </h2>
          <h3>Informe General de su Relación con el Fondo</h3>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            Nombre: <strong>{{ Auth::user()->name }}</strong><br>
            Cedula: {{ Auth::user()->cedula }}<br>
          </address>
        </div>
      </div>


      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
            <p class="lead"></p>
          <table class="table table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Informe Aportes </th>
              <th></th>

            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1.</td>
              <td>Aportes</td>
              <td>${{ number_format($data->aportes,0) }}</td>

            </tr>
            <tr>
              <td>2.</td>
              <td>Revalorizaciones</td>
              <td>${{ number_format($data->revalorizaciones,0) }}</td>

            </tr>
            <tr>
              <td>3.</td>
              <td>Ahorros</td>
              <td>${{ number_format($data->ahorros,0) }}</td>

            </tr>
            <tr>
              <td>4.</td>
              <td>Intereses</td>
              <td>${{ number_format($data->intereses,0) }}</td>

            </tr>

            <tr>
                <td></td>
                <td><strong>Total</strong></td>
                <td><strong>${{ number_format($data->aportes + $data->revalorizaciones + $data->ahorros + $data->intereses,0) }}</strong></td>

              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->

        <!-- /.col -->
        <div class="col-6">
          <p class="lead"></p>

          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Informe Creditos</th>
                  <th></th>

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1.</td>
                  <td>Crédito Ordinario</td>
                  <td>${{ number_format($data->ordinario,0) }}</td>

                </tr>
                <tr>
                  <td>2.</td>
                  <td>Crédito Educativo</td>
                  <td>${{ number_format($data->educativo,0) }}}</td>

                </tr>
                <tr>
                  <td>3.</td>
                  <td>Crédito de Vivienda</td>
                  <td>${{ number_format( $data->vivienda,0) }}</td>

                </tr>

                <tr>
                    <td></td>
                    <td><strong>Total Deudas</strong></td>
                    <td><strong>${{ number_format( $data->ordinario + $data->vivienda + $data->educativo ,0) }}</strong></td>

                  </tr>
                </tbody>
              </table>
          </div>
        </div>

        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              <address>
                <p class="lead"><br></p>
                <p class="lead"><br></p>
                <p class="lead"><br></p>
                <p class="lead"><br></p>
                <p align="center">
                    Fondo de Empleados Reginal Cauca<br>
                <strong>Nit </strong>891501744-4<br>
                       Popayan(Cauca)<br>
              </address><p>
            </div>
          </div>
        <!-- /.col -->
      </div>
      @endforeach
    </section>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->



  </body>

  </html>


