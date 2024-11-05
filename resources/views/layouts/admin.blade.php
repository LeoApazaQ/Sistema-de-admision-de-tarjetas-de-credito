@extends('adminlte::page')

@section('title', 'Panel de administracion')

@section('content')


    <body>
        <div id="app">
            <main>
                <div class="container">
                    <h5>Bienvenido admin, {{ auth()->user()->name }}</h5>
                </div>



            </main>
        </div>
    </body>

@endsection
