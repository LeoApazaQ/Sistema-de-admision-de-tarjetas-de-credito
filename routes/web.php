<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/ingresar/solicitud', function () {
    return view('requests.form');
})->name('ingresar.solicitud');

Route::get('/ver/colicitudes', function () {
    return view('requests.index');
})->name('ver.solicitudes');


Route::get('/ver/usuarios', function () {
    return view('users.index');
})->name('ver.usuarios');


Route::get('/crear/usuarios', function () {
    return view('users.create');
})->name('usuarios.create');


Route::get('/administrar/usuarios', function () {
    return view('roles.index');
})->name('usuarios.index');

//redireccion a admin panel
Route::get('/admin', function () {
    return view('layouts.admin');
})->name('admin.index');

Route::resource('/applications', ApplicationController::class);

Route::resource('/clients', ClientController::class);
