<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AssignRoleController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportapplicationsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas de autenticación
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset']);


//Rutas para el empleado
Route::group(['prefix' => 'empleado', 'middleware' => ['role:Empleado']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/clients/application', [ClientController::class, 'createWithApplication'])->name('clients.createwithapplication');
    Route::post('/clients/application', [ClientController::class, 'storeWithApplication'])->name('clients.storewithapplication');
    Route::resource('/clients', ClientController::class)->only(['index', 'show', 'create', 'store']);
});

//Rutas para el gerente
Route::group(['prefix' => 'gerente' ,'middleware' => ['role:Gerente']], function () {
    Route::resource('/applications', ApplicationController::class)->only(['edit', 'update', 'destroy']);/* 
    Route::get('/exportapplications',[ReportapplicationsController::class,'export'])->name('export.applications'); */
    //rutas de las solicitudes
    Route::get('/applications/pending', [ApplicationController::class, 'pendingApplications'])->name('applications.pending');
    Route::get('/applications/rejected', [ApplicationController::class, 'rejectedApplications'])->name('applications.rejected');
    Route::get('/applications/approved', [ApplicationController::class, 'approvedApplications'])->name('applications.approved');
    //cambio de estado de la solicitud
    Route::get('/applications/{id}/edit-status', [ApplicationController::class, 'editStatus'])->name('applications.edit-status');
    Route::put('/applications/{id}/update-status', [ApplicationController::class, 'updateStatus'])->name('applications.update-status');
    Route::resource('/clients', ClientController::class)->only(['edit', 'update', 'destroy']);
});

//rutas compartidas de gerente y empleado
Route::group(['prefix' => 'solicitud', 'middleware' => ['role:Gerente|Empleado']], function (){
    Route::resource('/applications', ApplicationController::class)->only(['index', 'show', 'create', 'store']);
});

//Rutas para el administrador
Route::group(['prefix' => 'admin' ,'middleware' => ['role:Admin']], function () {
    Route::get('/home', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/roles', RoleController::class);
    Route::resource('/permisos', PermissionController::class);
    Route::resource('/usuarios', UserController::class);
    Route::resource('/usuarios-roles', AssignRoleController::class);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});
