@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Solicitudes Pendientes</h1>
        <div class="container-fluid">
            <a href="{{ route('applications.approved') }}" class="btn btn-primary">Solicitudes Aprobadas</a>
            <a href="{{ route('applications.rejected') }}" class="btn btn-danger">Solicitudes Rechazadas</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Cliente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applications as $application)
                    <tr>
                        <td>{{ $application->title }}</td>
                        <td>{{ $application->client->nombres }} {{ $application->client->apellidos }}</td>
                        <td>
                            <a href="{{ route('applications.edit-status', $application->id) }}" class="btn btn-secondary btn-sm">Cambiar Estado</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
