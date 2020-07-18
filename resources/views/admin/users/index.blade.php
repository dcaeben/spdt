
@extends('layouts.dashadmin')

@section('content')







<div class="card">
    <div class="card-header">
      <h3 class="card-title">Administrador de Acceso</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

        <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">

        <thead>
        <tr role="row">
        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nombre</th>
        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Cedula</th>
        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Email</th>
        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Perfil</th>
        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Menu</th>
        </tr>
        </thead>
        <tbody>
       @foreach ($users as $user)
        <tr role="row" class="odd">
          <td tabindex="0" class="sorting_1">{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->cedula }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
          <td>
            <div class="btn-group">
            <!--can esconde el link cuando no tiene el permiso-->
              @can('edit-users')
              <a href="{{ route('admin.users.edit', $user->id ) }}"><button type="button" class="btn btn-outline-primary float-left btn-sm">Editar Usuario</button></a>
              @endcan
              <div style="margin-left: 3px !important;"></div>
              @can('delete-users')
              <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left btn-space">
                 @csrf
                 {{ method_field('DELETE') }}
                 <button type="submit" class="btn btn-outline-warning btn-sm">Eliminar</button>
              </form>
              @endcan
            </div>

          </td>

        </tr>

        @endforeach



    </tbody>
        <tfoot>
        <tr><th rowspan="1" colspan="1">#</th>
            <th rowspan="1" colspan="1">Nombre</th>
            <th rowspan="1" colspan="1">Cedula</th>
            <th rowspan="1" colspan="1">Email</th>
            <th rowspan="1" colspan="1">Perfil</th>
            <th rowspan="1" colspan="1">Menu</th>
        </tr>
        </tfoot>
      </table>
       </div>
       </div>

       </div>
    </div>
    <!-- /.card-body -->
  </div>
  @endsection


