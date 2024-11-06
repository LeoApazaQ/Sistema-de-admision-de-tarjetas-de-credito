@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Ingreso de Solicitud de Tarjeta de Crédito</h3>

    <form action="{{-- {{ route('solicitudes.store') }} --}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="identificacion">Número de Identificación</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion" required>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="ingresos">Ingresos Mensuales</label>
            <input type="number" class="form-control" id="ingresos" name="ingresos" required>
        </div>

        <div class="form-group">
            <label for="ocupacion">Ocupación</label>
            <input type="text" class="form-control" id="ocupacion" name="ocupacion" required>
        </div>

        <div class="form-group">
            <label for="antiguedad">Antigüedad en el Empleo (en años)</label>
            <input type="number" class="form-control" id="antiguedad" name="antiguedad" required>
        </div>

{{--         <div class="form-group">
            <label for="tipo_tarjeta">Tipo de Tarjeta</label>
            <select class="form-control" id="tipo_tarjeta" name="tipo_tarjeta">
                <option value="credito">Crédito</option>
                <option value="debito">Débito</option>
            </select>
        </div> --}}

{{--         <div class="form-group">
            <label for="documentos">Documentación Requerida</label>
            <input type="file" class="form-control-file" id="documentos" name="documentos[]" multiple required>
        </div>
--}}

        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
        <a href="{{-- {{ route('solicitudes.index') }} --}}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

@endsection
