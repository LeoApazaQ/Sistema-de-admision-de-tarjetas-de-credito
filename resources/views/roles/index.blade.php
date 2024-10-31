@extends('layouts.app')

@section('title', 'Administrar Roles y Permisos')

@section('content')

<div class="container">
    <h2>Administrar Roles y Permisos</h2>

    <div class="row">
        <div class="col-md-6">
            <h3>Asignar Rol</h3>
            <form {{-- action="{{ route('asignar_rol') }}" method="POST" --}}>
               {{--  @csrf --}}
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <select name="user" class="form-control">
                        <option value="1">Usuario 1</option>
                        <option value="2">Usuario 2</option>
                        <option value="3">Usuario 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rol">Rol</label>
                    <select name="rol" class="form-control">
                        <option value="admin">Administrador</option>
                        <option value="editor">Editor</option>
                        <option value="user">Usuario</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Asignar Rol</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Administrar Permisos</h3>
            <form {{-- action="{{ route('administrar_permisos') }}" method="POST" --}}>
               {{--  @csrf --}}
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <select name="user" class="form-control">
                        <option value="1">Usuario 1</option>
                        <option value="2">Usuario 2</option>
                        <option value="3">Usuario 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="permisos">Permisos</label>
                    <input type="text" name="permisos" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Administrar Permisos</button>
            </form>
        </div>
    </div>
</div>

@endsection()
