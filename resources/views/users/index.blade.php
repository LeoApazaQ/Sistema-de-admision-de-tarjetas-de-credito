@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gestión de Usuarios</h2>

{{--     @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
 --}}

    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Añadir Usuario</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

                <tr>
                    <td>1</td>
                    <td>Juan Aguirre</td>
                    <td>Aguirre@gmail.com</td>
                    <td>Operario</td>
                    <td>
                        <a href="" class="btn btn-warning">Editar</a>
                        <form action="" method="" style="display:inline;">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>

        </tbody>
    </table>
</div>
@endsection
