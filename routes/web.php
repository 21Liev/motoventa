<?php

use App\Http\Controllers\MotoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Rutas de autenticación
Auth::routes();

// Rutas para ver motos
Route::get('/motos', [MotoController::class, 'index'])->name('motos.index');

// Ruta para ver el formulario de agregar moto, solo si el usuario está autenticado (y es admin)
Route::middleware('auth')->group(function() {
    Route::get('/motos/create', [MotoController::class, 'create'])->name('motos.create');
    Route::post('/motos', [MotoController::class, 'store'])->name('motos.store');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
