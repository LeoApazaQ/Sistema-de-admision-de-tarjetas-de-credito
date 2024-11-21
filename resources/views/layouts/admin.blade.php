@extends('adminlte::page')

@section('title', 'Panel de administracion')

@section('content')

    <body>
        <div id="app">
            <main>
                <div class="container">
                    <h5>Bienvenido admin, {{ auth()->user()->name }}</h5>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            @include('charts.users.total-users')
                        </div>
                        <div class="col-md-4">
                            @include('charts.credits.total-credits')
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        
                    </div>
                </div>
            </main>
        </div>
    </body>
@endsection
