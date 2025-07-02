<?php

use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\AuthController;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');




// Rutas personalizadas de login y registro
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrarse', [AuthController::class, 'showRegister'])->name('registro');
Route::post('/registrarse', [AuthController::class, 'registrarse'])->name('registrarse.post');





// Motos públicas
Route::get('/motos', [MotoController::class, 'index'])->name('motos.index');

// Motos protegidas (solo para usuarios autenticados)
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Rutas de motos (ya las tenés)
    Route::get('/create', [MotoController::class, 'create'])->name('create');
    Route::post('/motos', [MotoController::class, 'store'])->name('motos.store');    // En routes/web.php
    Route::get('motos/{moto}/edit', [MotoController::class, 'edit'])->name('motos.edit');
    Route::put('/motos/{id}', [MotoController::class, 'update'])->name('motos.update');
    Route::delete('/motos/{id}', [MotoController::class, 'delete'])->name('delete');
    // Rutas de equipos (equipo = singular, rutas = plural)
    Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
    Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
    Route::get('equipos/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
    Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
    Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');
    Route::get('/listadoClientes', [AuthController::class, 'index'])->name('listadoClientes');

});

Route::middleware(['auth', 'role:2'])->group(function () {

});



Route::get('/sucursales', [SucursalController::class, 'index'])->name('sucursales');

Route::get('/equipo', [EquipoController::class, 'index'])->name('equipo');

