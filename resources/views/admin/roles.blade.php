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
                    <h3 class="card-title">Listado de Roles</h3>
                    <a href="{{ route('roles.create') }}" class="btn btn-info float-right">Nuevo</a>
                    
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th style="width: 300px">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('roles.show', $role) }}">Permisos</a>
                                        <a href="{{ route('roles.edit', $role) }}" class="btn btn-info">Editar</a>
                                        <form action="{{ route('roles.destroy', $role) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

