@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Reportes</h2>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="{{-- {{ route('reports.generate', ['type' => 'approved']) }} --}}">Solicitudes Aprobadas</a>
        </li>
        <li class="list-group-item">
            <a href="{{-- {{ route('reports.generate', ['type' => 'rejected']) }} --}}">Solicitudes Rechazadas</a>
        </li>
        <li class="list-group-item">
            <a href="{{-- {{ route('reports.generate', ['type' => 'pending']) }} --}}">Solicitudes Pendientes</a>
        </li>
    </ul>
</div>
@endsection
