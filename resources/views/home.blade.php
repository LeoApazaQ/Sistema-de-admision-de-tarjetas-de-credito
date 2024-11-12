@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="container">
        <div class="container">
            <h5>Bienvenido Usuario, {{ auth()->user()->name }}</h5>
        </div>
        <div class="d-flex">

            <!-- Content -->
            <div class="content">
                <div class="container-fluid">
                    <h2 class="mb-4">Bienvenido al Área de Crédito</h2>
                    <div class="row">
                        <!-- Estadísticas -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Solicitudes Pendientes</h5>
                                    <p class="card-text">15 Solicitudes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Créditos Aprobados</h5>
                                    <p class="card-text">120 Créditos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Clientes Activos</h5>
                                    <p class="card-text">350 Clientes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gráfico (con JavaScript) -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Gráfico de Créditos por Mes</h5>
                                    <canvas id="creditChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('creditChart').getContext('2d');
        var creditChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                datasets: [{
                    label: 'Créditos Aprobados',
                    data: [12, 19, 3, 5, 2, 3],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    x: {
                        beginAtZero: true
                    },
                }
            }
        });
    </script>
@endsection
