@extends('layouts.dashadmin')

@section('content')

<div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header text-white" style="background: url('{{ asset('dashboard/dist/img/photo1.png') }}') center center;">

      <h3 class="widget-user-username text-right">Cargar Datos</h3>
      <h5 class="widget-user-desc text-right">Informes Asociados</h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle" src="{{ asset('dashboard/dist/img/dbimage.jpg') }}" alt="User Avatar">
    </div>
    <div class="card-footer">


      <div class="row">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cargar Archivo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{ route('report.excel') }}" method="post" enctype="multipart/form-data">

              <div class="card-body">

                <div class="form-group">
                  <label>Importar Archivo Excel</label>
                  <div class="input-group">
                    @csrf
                    <div class="custom-file">
                      <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Seleccionar Archivo</label>

                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Subir Datos</span>
                    </div>
                  </div>
                </div>


               <script>
                $('h1').ready(function()
                {
                    <h1>estoy aqui</h1>
                });
                </script>


                <div class="form-group">

                    @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Muy Bien!</h5>
                        {{ Session::get('message') }}
                      </div>
                    @endif

                </div>


                <button type="submit" class="btn btn-success">Enviar</button>
                </div>

              <!-- /.card-body -->



            </form>
          </div>


          <div class="col-md-6">
            <!-- Box Comment -->
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="{{ asset('dashboard/dist/img/dbimage.jpg') }}" alt="User Image">
                  <span class="username"><a href="#">Actualizar Base de Datos.</a></span>
                  <span class="description">Información Para Actualizar Reportes</span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                    <i class="far fa-circle"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- post text -->
                <p>Aquí encontrara información para realizar correctamente la actualización del informe mensual de los asociados . Siga las instrucciones.</p>

                <p>Dele clic  al botón buscar y seleccione la nueva planilla de Excel con los datos actualizados de su computadora y posteriormente presione el botón verde enviar, en el momento de cargar correctamente los datos aparecerá un mensaje exitoso en verde. </p>

                <!-- Attachment -->
                <div class="attachment-block clearfix">
                  <img class="attachment-img" src="{{ asset('dashboard/dist/img/dbimage.jpg') }}" alt="Attachment Image">

                  <div class="attachment-pushed">
                    <h4 class="attachment-heading"><a href="https://www.youtube.com/watch?v=NuD_MECLW_E" target="_blank">Visita el video tutorial</a></h4>

                    <div class="attachment-text">
                      Dale Click Aqui <a href="https://www.youtube.com/watch?v=NuD_MECLW_E" target="_blank">Video Tutorial</a>
                    </div>
                    <!-- /.attachment-text -->
                  </div>
                  <!-- /.attachment-pushed -->
                </div>
                <!-- /.attachment-block -->


              </div>
              <!-- /.card-body -->

              <!-- /.card-footer -->

              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>


        <!-- /.col -->
      </div>
      <!-- /.row -->

    </div>

  </div>

  @endsection
