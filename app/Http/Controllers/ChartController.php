<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ChartController extends Controller
{
    public function totalUsers()
    {
        $chart_options = [
            'chart_title' => 'Usuarios por mes',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'chart_color' => '33,100,0',
        ];

        $chart = new LaravelChart($chart_options);

        //Pasamos la variable
        return $chart;
    }

    public function totalCreditsByMonth()
    {
        $chart_options = [
            'chart_title' => 'Solicitudes por mes',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Application',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'chart_color' => '100,0,100',
        ];

        $chart2 = new LaravelChart($chart_options);

        return $chart2;
    }
}
