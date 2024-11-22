@extends('layouts.app')

@section('template_title')
    Applications
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3>{{ __('Listado de Solicitudes') }}</h3>
                            </span>

                            <div class="float-right">
                                @can('Crear')
                                    <a href="{{ route('applications.create') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="left">
                                        {{ __('Nueva solicitud') }}
                                    </a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Titulo</th>
                                        <th>Estado</th>
                                        <th>Cliente</th>
                                        <th style="width: 300px">Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applications as $application)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $application->title }}</td>
                                            <td>{{ $application->status->nombre }}</td>
                                            <td>{{ $application->client->nombres  }} {{ $application->client->apellidos }}</td>

                                            <td>
                                                @can('Consultar', $application)
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('applications.show', $application->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                @endcan

                                                @can('Editar', $application)
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('applications.edit', $application->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @endcan

                                                @can('Eliminar', $application)
                                                    <form action="{{ route('applications.destroy', $application->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                                class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    {!! $applications->withQueryString()->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>
@endsection
