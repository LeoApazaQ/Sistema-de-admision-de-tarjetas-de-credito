@extends('layouts.app')

@section('title', 'Solicitudes')

@section('content')
<div class="container">
    <h2 class="mb-3">Listado de Solicitudes</h2>
    <button class="container btn btn-primary" onclick="window.location='{{ route('request.create') }}'">Agregar solicitud</button>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Juan Pérez</td>
                <td>Pendiente</td>
                <td>15/10/2024</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info">Ver</a>
                    <a href="#" class="btn btn-sm btn-success">Aprobar</a>
                    <a href="#" class="btn btn-sm btn-danger">Rechazar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
