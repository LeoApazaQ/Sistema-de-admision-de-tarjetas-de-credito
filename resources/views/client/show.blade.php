@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? __('Show') . " " . __('Client') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrando') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('clients.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombres:</strong>
                                    {{ $client->nombres }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidos:</strong>
                                    {{ $client->apellidos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dni:</strong>
                                    {{ $client->dni }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $client->fecha_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $client->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $client->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ingresos Mensuales:</strong>
                                    {{ $client->ingresos_mensuales }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ocupacion:</strong>
                                    {{ $client->ocupacion }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
