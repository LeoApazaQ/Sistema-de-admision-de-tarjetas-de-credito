@extends('adminlte::page')

@section('title', 'Administrar Roles')

@section('content_header')
    <h1>Administrar Permisos</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listado de Permisos</h3>
                    <a href="{{ route('permisos.create') }}" class="btn btn-info float-right">Nuevo</a>
                    
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th style="width: 200px">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        <a href="{{ route('permisos.edit', $permission) }}" class="btn btn-info">Editar</a>
                                        <form action="{{ route('permisos.destroy', $permission) }}" method="post" class="d-inline">
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

