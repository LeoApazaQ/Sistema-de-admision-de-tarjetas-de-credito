@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} CLiente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Cliente</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('clients.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            {{-- se usa un include para agregar el formulario --}}
                            @include('client.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
