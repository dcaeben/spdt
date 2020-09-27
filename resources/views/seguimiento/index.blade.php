@extends('layouts.dashadmin')

@section('content')

<section class="content-header">
<div class="container-fluid">

<div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header text-white" style="background: url('{{ asset('dashboard/dist/img/photo1.png') }}') center center;">

      <h3 class="widget-user-username text-right">Seguimiento</h3>
      <h5 class="widget-user-desc text-right">Informe de Seguimiento </h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle" src="{{ asset('dashboard/dist/img/dbimage.jpg') }}" alt="User Avatar">

    </div>

</div>


</div>
</section>



<section class="content">
    @inject('programas', 'App\Services\Programas')
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Seguimiento</h3>

          </div>
          <!-- /.card-header -->
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Sector</label>
                      <select id="sector" class="form-control select2bs4" style="width: 100%;">
                        @foreach( $sectores as $sector)
                        <option value="{{ $sector->IDSECTOR }}">{{ $sector->DESCRIPCION }}</option>
                        @endforeach
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Subprograma</label>
                        <select id="subprograma" class="form-control select2bs4" style="width: 100%;">
                            @foreach($programas->get() as $index => $programa)
                                <option value="{{ $index }}" {{ old('programa_id') == $index ? 'selected' : '' }}>
                                  {{ $programa }}
                                </option>
                            @endforeach
                        </select>
                      </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Responsable</label>
                        <select id="responsable" class="form-control select2bs4" style="width: 100%;">
                            @foreach( $responsables as $responsable)
                            <option value="{{ $responsable->IDRESPONSABLE_PROGRAMA }}">{{ $responsable->NOMBRE }} {{ $responsable->APELLIDO }}</option>
                            @endforeach
                        </select>
                      </div>
                    <!-- /.form-group -->
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Indicador de Producto</label>
                      <select id="producto" class="form-control select2bs4" style="width: 100%;">

                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <div class="card-footer" align="center">
                <button type="button" class="btn bg-gradient-info" data-toggle="modal" data-target="#modal-lg">Hacer Seguimiento</button>
              </div>
              <!-- /.card-body -->
          </div> <!-- /.card-body -->

        </div>









        <div class="card">
            <div class="card-header">
              <h2 class="card-title text-primary"><strong>Observación seguimiento</strong></h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">

                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Fecha</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Valor</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Fuente</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Meta</th>

                </tr>
                </thead>
                <tbody>



                <tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>


                </tr>





            </tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">#</th>
                    <th rowspan="1" colspan="1">Fecha</th>
                    <th rowspan="1" colspan="1">Valor</th>
                    <th rowspan="1" colspan="1">Fuente</th>
                    <th rowspan="1" colspan="1">Meta</th>

                </tr>
                </tfoot>
              </table>
               </div>
               </div>

               </div>
            </div>
            <!-- /.card-body -->
          </div>





      </div><!-- /.container-fluid -->

      <!-- /.modal -->

      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Seguimiento y Metas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>





            <div class="modal-body">





              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Seguimiento</h3>

                </div>
                <!-- /.card-header -->
                  <!-- /.card-header -->
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Fecha de Seguimiento</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                          <!-- /.form-group -->

                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                          <div class="form-group">
                              <label>Observación Seguimiento</label>
                              <textarea class="form-control" rows="1" placeholder="Ingrese ..."></textarea>
                            </div>
                          <!-- /.form-group -->

                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <div class="card-footer" align="center">

                    </div>
                    <!-- /.card-body -->
                </div> <!-- /.card-body -->

                <!-- /.card-Metas-->

             <div class="card card-success">

                 <div class="card-header">
                 <h3 class="card-title">Metas</h3>
                 </div>
                    <!-- /.card-header -->
                      <!-- /.card-header -->
                      <div class="card-body">
                <div class="row">

                <div class="col-md-6">

                <div class="form-group">
                  <label>Fecha de Meta</label>
                  <div class="input-group date" id="seguimientodate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#seguimientodate"/>
                    <div class="input-group-append" data-target="#seguimientodate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>


              </div>

              <div class="col-md-6">
              <div class="form-group">
                <label>Descripción Meta</label>
                <textarea class="form-control" rows="1" placeholder="Ingrese ..."></textarea>
              </div>
            </div>

          </div>



          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Fuente Financiación</label>
                <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>

                </select>
              </div>
            </div>


              <div class="col-md-6">
                <div class="form-group">
                    <label>valor</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <p style="text-align: right;"><a href="#" >Otro Valor</a></p>
                  </div>

                <!-- /.form-group -->
              </div>
              <button type="button" class="btn btn-block btn-outline-success btn-sm">Registrar Otra Meta</button>

         </div>








         </div>





            </div>






            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->






    </section>

  @endsection

  @section('script')
     <script>
         $(document).ready(function(){

             function loadProducto() {
                  //con esto capturo el id de subprograma
                 //desde el select subprograma
                 var subprograma_id = $('#subprograma').val();
                 if($.trim(subprograma_id) !='') {
                     //el primer subprograma_id hace referencia la que devuelve el controlador en la consulta
                     //el segundo hace referencia al subprograma_id del select
                    $.get('productos', {subprogramaid: subprograma_id}, function (productos) {

                        $('#producto').empty();
                        $('#producto').append("<option value=''>Selecciona el Indicador de Producto</option>");
                        $.each(productos, function (index, value) {
                            console.log(value);
                            $('#producto').append("<option value='" + index + "'>"+ value +"</option>");

                        })



                    });
                 }


             }

             loadProducto();
             $('#subprograma').on('change', loadProducto);

         });
     </script>

  @endsection

