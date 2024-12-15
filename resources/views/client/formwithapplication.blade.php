<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="dni" class="form-label">{{ __('Dni') }}</label>
            <input {{ $client->dni ? 'readonly' : '' }} type="text" name="dni" class="form-control @error('dni') is-invalid @enderror"
                value="{{ old('dni', $client?->dni) }}" id="dni" placeholder="Dni" required>
            {!! $errors->first('dni', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="nombres" class="form-label">{{ __('Nombres') }}</label>
            <input {{ $client->dni ? 'readonly' : '' }} type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror"
                value="{{ old('nombres', $client?->nombres) }}" id="nombres" placeholder="Nombres" required>
            {!! $errors->first('nombres', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="apellidos" class="form-label">{{ __('Apellidos') }}</label>
            <input {{ $client->dni ? 'readonly' : '' }} type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror"
                value="{{ old('apellidos', $client?->apellidos) }}" id="apellidos" placeholder="Apellidos" required>
            {!! $errors->first('apellidos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fecha Nacimiento') }}</label>
            <input {{ $client->dni ? 'readonly' : '' }} type="date" name="fecha_nacimiento"
                class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                value="{{ old('fecha_nacimiento', $client?->fecha_nacimiento) }}" id="fecha_nacimiento"
                placeholder="Fecha Nacimiento" required>
            {!! $errors->first(
                'fecha_nacimiento',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror"
                value="{{ old('direccion', $client?->direccion) }}" id="direccion" placeholder="Direccion" required>
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="tel" name="telefono" class="form-control @error('telefono') is-invalid @enderror"
                value="{{ old('telefono', $client?->telefono) }}" id="telefono" placeholder="Telefono" required>
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ingresos_mensuales" class="form-label">{{ __('Ingresos Mensuales') }}</label>
            <input type="text" name="ingresos_mensuales"
                class="form-control @error('ingresos_mensuales') is-invalid @enderror"
                value="{{ old('ingresos_mensuales', $client?->ingresos_mensuales) }}" id="ingresos_mensuales"
                placeholder="Ingresos Mensuales" required>
            {!! $errors->first(
                'ingresos_mensuales',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ) !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ocupacion" class="form-label">{{ __('Ocupacion') }}</label>
            <input type="text" name="ocupacion" class="form-control @error('ocupacion') is-invalid @enderror"
                value="{{ old('ocupacion', $client?->ocupacion) }}" id="ocupacion" placeholder="Ocupacion" required>
            {!! $errors->first('ocupacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="title" class="form-label">{{ __('Solicitud') }}</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $application?->title ?? 'Solicitud de credito - ' . date('Y-m-d-h-i')) }}" id="title" placeholder="Title" readonly>
            {!! $errors->first('title', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>

<script src="{{ asset('js/searchbydni.js') }}"></script>
