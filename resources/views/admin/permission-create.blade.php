@extends('adminlte::page')

@section('title', 'Crear Nuevo Rol')

@section('content_header')
    <h1>Crear Nuevo permiso</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Nuevo Permiso</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('permisos.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre del Permiso</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Ingrese el nombre del Permiso">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
