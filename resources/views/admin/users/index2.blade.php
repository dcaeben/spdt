@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">


               <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)

                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->cedula }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                              <!--can esconde el link cuando no tiene el permiso-->
                                @can('edit-users')
                                <a href="{{ route('admin.users.edit', $user->id ) }}"><button type="button" class="btn btn-outline-primary float-left btn-space">Editar</button></a>
                                @endcan

                                @can('delete-users')
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left btn-space">
                                   @csrf
                                   {{ method_field('DELETE') }}
                                   <button type="submit" class="btn btn-outline-warning">Eliminar</button>
                                </form>
                                @endcan
                            </td>

                          </tr>



                        @endforeach


                    </tbody>
                  </table>



                </div>
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
