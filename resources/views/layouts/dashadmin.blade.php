<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'S-PDT') }}</title>

  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">


  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="{{ url('/') }}" role="button"><i class="fas fa-bars"></i></a>
      </li>


      <!-- Menu Administradores -->
      <!--
      <li class="nav-item {{ request()->is('cargardatos') ? 'active' : '' }} d-none d-sm-inline-block">
        <a href="{{ route('report') }}" class="nav-link">Actualizar Datos</a>
      </li>
      -->

      <li class="nav-item {{ request()->is('admin/users') ? 'active' : '' }} d-none d-sm-inline-block">
      <a href="{{ route('admin.users.index') }}" class="nav-link">Administrador de Permisos</a>
      </li>

      <li class="nav-item {{ request()->is('seguimiento') ? 'active' : '' }} d-none d-sm-inline-block">
        <a class="nav-link">Seguimiento</a>

      </li>


    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

     <!-- Menu Asociados -->


      <!-- Notifications Dropdown Menu -->



      <li class="nav-item">
        <a class="btn btn-block btn-warning btn-sm" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">S-PDT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <h6 style="color: aliceblue">{{ Auth::user()->name }}</h6>
        </div>

      </div>

     <!-- Navegar Izquierda -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
            <!--
              <li class="nav-item">
                <a href="{{ route('report') }}" class="nav-link {{ request()->is('cargardatos') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actualizar Datos</p>
                </a>
              </li>
            -->

            <li class="nav-item">
                <a href="{{ route('seguimiento') }}" class="nav-link  {{ request()->is('seguimiento') ? 'active' : '' }}" class="nav-link" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seguimiento</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('reporte') }}" class="nav-link  {{ request()->is('reporte') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('gestion') }}" class="nav-link  {{ request()->is('gestion') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestión</p>
                </a>
              </li>



            </ul>

          </li>



        </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->


  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">




       @yield('content')



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        S-PDT
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="https://ebenteam.com">EbenTeam</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.min.js') }}"></script>


<!-- DataTables -->
<script src="{{ asset('dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->



<script src="{{ asset('dashboard/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/select2/js/select2.full.min.js') }}"></script>

<script src="{{ asset('dashboard/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>

<script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>

<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservationdate').datetimepicker({
          format: 'L'
      });

      $('#seguimientodate').datetimepicker({
        format: 'L'
      });
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

    })
  </script>


<script src="{{ asset('dashboard/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });

</script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>
<!-- page script -->


<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });

    });
  </script>
@yield('script')


</body>
</html>
