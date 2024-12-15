@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Cliente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Cliente con una Solicitud</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('clients.storewithapplication') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            {{-- se usa un include para agregar el formulario --}}
                            @include('client.formwithapplication')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
