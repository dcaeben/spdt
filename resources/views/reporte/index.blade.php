@extends('layouts.dashadmin')

@section('content')

<section class="content-header">
<div class="container-fluid">

<div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header text-white" style="background: url('{{ asset('dashboard/dist/img/photo1.png') }}') center center;">

      <h3 class="widget-user-username text-right">Reporte</h3>
      <h5 class="widget-user-desc text-right">Reporte S-PDT</h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle" src="{{ asset('dashboard/dist/img/dbimage.jpg') }}" alt="User Avatar">

    </div>

</div>


</div>
</section>



<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Datos Reporte</h3>

          </div>
          <!-- /.card-header -->
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Sector</label>
                      <select class="form-control select2bs4" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Subprograma</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Indicador de Producto</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                    <!-- /.form-group -->
                    <!-- /.form-group -->
                    <div class="form-group">

                      <label>Fecha</label>
                      <div class="input-group date" id="seguimientodate" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#seguimientodate"/>
                      <div class="input-group-append" data-target="#seguimientodate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                      </div>

                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <div class="card-footer" align="center">
                <button type="button" class="btn bg-gradient-info">Generar Reporte</button>
              </div>
              <!-- /.card-body -->
          </div> <!-- /.card-body -->


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Reporte Generado</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Reportes</th>
                    <th> </th>
                    <th>Progreso</th>
                    <th style="width: 40px">Label</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Avance en Presupuesto</td>
                    <td><span class="badge bg-success">$4.000.000</span> / <span class="badge bg-primary"> $80.000.000</span></td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-success" style="width: 5%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-success">5%</span></td>
                  </tr>



                  <tr>
                    <td>2.</td>
                    <td>Avance en Metas</td>
                    <td><span class="badge bg-warning">5</span> / <span class="badge bg-secondary">16</span></td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" style="width: 31%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-warning">31.25%</span></td>
                  </tr>


                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
















        </div>























                </form>
              </div>
          </div>





      </div><!-- /.container-fluid -->









    </section>










  @endsection
