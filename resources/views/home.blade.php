@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="container">
        <div class="container">
            <h5>Bienvenido Usuario, {{ auth()->user()->name }}</h5>
        </div>
    {{--
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
    </div>
--}}



 {{--  botones de navegacion en desuso
  <div class="container">
        <div class="row justify-content-center">
            <a class="btn btn-primary" href="{{ route('ingresar.solicitud') }}">formulario de solicitud</a>
            <a class="btn btn-info" href="{{ route('ver.solicitudes') }}">ver solicitudes</a>
            <a class="btn btn-success" href="{{ route('ver.usuarios') }}">ver Usuarios</a>
            <a class="btn btn-primary" href="{{ route('usuarios.index') }}">Administrar usuarios</a>
            <a class="btn btn-success" href="{{ route('admin.index') }}">Panel de administracion</a>
        </div>
    </div>
 --}}

    </div>
@endsection
