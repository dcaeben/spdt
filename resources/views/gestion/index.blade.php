@extends('layouts.dashadmin')

@section('content')

<section class="content-header">
<div class="container-fluid">

<div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header text-white" style="background: url('{{ asset('dashboard/dist/img/photo1.png') }}') center center;">

      <h3 class="widget-user-username text-right">Gestión</h3>
      <h5 class="widget-user-desc text-right">Gestión S-PDT</h5>
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
            <h3 class="card-title">Datos Gestión</h3>

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

                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>

              <!-- /.card-body -->
          </div> <!-- /.card-body -->


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Reporte Generado</h3>
            </div>
            <!-- /.card-header -->

        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-info">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="font-size:20px;">2020</span>
                <span class="info-box-number" style="font-size:25px;">4</span>


              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-success">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="font-size:20px;">2021</span>
                <span class="info-box-number" style="font-size:25px;">5</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-warning">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="font-size:20px;">2022</span>
                <span class="info-box-number" style="font-size:25px;">2</span>


                <span class="progress-description">

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-secondary">
              <span class="info-box-icon"><i class="fas fa-calendar-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="font-size:20px;">2023</span>
                <span class="info-box-number" style="font-size:25px;">5</span>


              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- =========================================================== -->
        <div class="card-footer" align="center">
            <button type="button" class="btn bg-gradient-info">Guardar</button>
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
