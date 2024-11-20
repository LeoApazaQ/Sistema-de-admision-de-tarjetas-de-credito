@extends('adminlte::page')

@section('title', 'Administrar Roles')

@section('content_header')
    <h1>Administrar Roles</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listado de Usuarios</h3>
                    <a href="{{ route('register') }}" class="btn btn-info float-right">Nuevo Usuario</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>

                                <th style="width: 300px">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->roles->first()->name ?? 'sin rol' }}</td>
                                    <td>
                                        <a class="btn btn-secondary" href="{{ route('usuarios-roles.show', $user) }}">Roles</a>
                                        <a class="btn btn-success" href="">Permisos</a>
                                    </td>
                                    {{-- <td>
                                        <a class="btn btn-success" href="">Permisos</a>
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-info">Editar</a>
                                        <form action="{{ route('users.destroy', $user) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

