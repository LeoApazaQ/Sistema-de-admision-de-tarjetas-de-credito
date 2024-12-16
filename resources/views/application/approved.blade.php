@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Solicitudes Aprobadas</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr>
                        <td>{{ $application->title }}</td>
                        <td>{{ $application->client->nombres }} {{ $application->client->apellidos }}</td>
                        <td>{{ $application->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection