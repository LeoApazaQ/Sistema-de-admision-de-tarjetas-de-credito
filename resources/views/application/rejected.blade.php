@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Solicitudes Rechazadas</h1>
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                    <th>No</th>
                    <th>Titulo</th>
                    <th>Cliente</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $application->title }}</td>
                    <td>{{ $application->client->nombres }} {{ $application->client->apellidos }}</td>
                    <td>
                        <a href="{{ route('applications.edit', $application->id) }}" class="btn btn-primary btn-sm">Ver</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection