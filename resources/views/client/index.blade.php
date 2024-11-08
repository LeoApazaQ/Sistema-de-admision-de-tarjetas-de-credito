@extends('layouts.app')

@section('template_title')
    Clientes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h4>{{ __('Clientes') }}</h4>
                            </span>

                            <div class="float-right">
                                <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear nuevo cliente') }}
                                </a>
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

                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Dni</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Ingresos Mensuales</th>
                                        <th>Ocupacion</th>
                                        <th style="width: 300px">Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $client->nombres }}</td>
                                            <td>{{ $client->apellidos }}</td>
                                            <td>{{ $client->dni }}</td>
                                            <td>{{ $client->fecha_nacimiento }}</td>
                                            <td>{{ $client->direccion }}</td>
                                            <td>{{ $client->telefono }}</td>
                                            <td>{{ $client->ingresos_mensuales }}</td>
                                            <td>{{ $client->ocupacion }}</td>

                                            <td>
                                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary mr-1"
                                                        href="{{ route('clients.show', $client->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success mr-1"
                                                        href="{{ route('clients.edit', $client->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mr-1"
                                                        onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {!! $clients->withQueryString()->links('pagination::bootstrap-4') !!}
                </div>

            </div>
        </div>
    </div>
@endsection
