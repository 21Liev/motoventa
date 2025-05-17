<?php

use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\SucursalController;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Autenticación (login, register, etc.)
Auth::routes();

// Página post-login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Motos públicas
Route::get('/motos', [MotoController::class, 'index'])->name('motos.index');

// Motos protegidas (solo para usuarios autenticados)
Route::middleware('auth')->group(function () {
    Route::get('/create', [MotoController::class, 'create'])->name('create');
    Route::post('/motos', [MotoController::class, 'store'])->name('motos.store');
});

Route::get('/motos/{id}/edit', [MotoController::class, 'edit'])->name('edit');
Route::put('/motos/{id}', [MotoController::class, 'update'])->name('motos.update');
Route::delete('/motos/{id}', [MotoController::class, 'delete'])->name('delete');



Route::get('/sucursales', [SucursalController::class, 'index'])->name('sucursales');

Route::get('/equipo', [EquipoController::class, 'index'])->name('equipo');

