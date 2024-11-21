<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ChartController;

class AdminController extends Controller
{
    public function index(ChartController $chartController)
    {
        $usersChart = $chartController->totalUsers();

        $creditsByMonthChart = $chartController->totalCreditsByMonth();

        return view('layouts.admin', compact('usersChart', 'creditsByMonthChart'));
    }
}
