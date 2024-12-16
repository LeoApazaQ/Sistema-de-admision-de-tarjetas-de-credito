@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cambiar el Estado de las Solicitud</h1>

        <form action="{{ route('applications.update-status', $application->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="status_id">Estado</label>
                <select name="status_id" id="status_id" class="form-control">
                    @foreach($statuses as $status)
                        <option value="{{ $status->id }}" {{ $application->status_id == $status->id ? 'selected' : '' }}>
                            {{ $status->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Estado</button>
        </form>
    </div>
@endsection