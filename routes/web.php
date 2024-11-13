<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AssignRoleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//rutas para el empleado
Route::group(['prefix' => 'Empleado', 'middleware' => ['role:Empleado']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/clients', ClientController::class);
});

//rutas para el gerente
Route::group(['prefix' => 'gerente' ,'middleware' => ['role:Gerente']], function () {
    Route::resource('/applications', ApplicationController::class);
});

//Rutas para el administrador
Route::group(['prefix' => 'admin' ,'middleware' => ['role:Admin']], function () {
    Route::get('/admin', function () { //redireccion a admin panel
        return view('layouts.admin');
    })->name('admin.index');
    Route::resource('/roles', RoleController::class);
    Route::resource('/permisos', PermissionController::class);
    Route::get('/usuarios', [UserController::class, 'index'])->name('admin.user');
    Route::resource('/usuarios-roles', AssignRoleController::class);
});
