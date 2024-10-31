@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reporte de Solicitudes por Estado</h2>
    <form action="{{-- {{ route('reportes.estado') }} --}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fecha_inicio">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha Fin</label>
            <input type="date" name="fecha_fin" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Generar Reporte</button>
    </form>

   {{--  @if(isset($reportes))
        <h3>Resultados</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Estado</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reportes as $reporte)
                    <tr>
                        <td>{{ $reporte->estado }}</td>
                        <td>{{ $reporte->cantidad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif --}}
</div>
@endsection
