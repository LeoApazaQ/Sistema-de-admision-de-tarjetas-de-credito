<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/administrar/usuarios', function () {
    return view('roles.index');
})->name('usuarios.index');

//redireccion a admin panel
Route::get('/admin', function () {
    return view('layouts.admin');
})->name('admin.index');

Route::resource('/applications', ApplicationController::class);

Route::resource('/clients', ClientController::class);

//Rutas para el administrador
Route::prefix('admin')->group(function () {
    Route::resource('/roles', RoleController::class);
    Route::resource('/permisos', PermissionController::class);
    Route::get('/usuarios', [UserController::class, 'index'])->name('admin.user');
});






