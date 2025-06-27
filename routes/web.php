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


// Página post-login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Motos públicas
Route::get('/motos', [MotoController::class, 'index'])->name('motos.index');

// Motos protegidas (solo para usuarios autenticados)
Route::middleware('auth', 'role:1')->group(function () {
    Route::get('/create', [MotoController::class, 'create'])->name('create');
    Route::post('/motos', [MotoController::class, 'store'])->name('motos.store');
    Route::get('/motos/{id}/edit', [MotoController::class, 'edit'])->name('edit');
    Route::put('/motos/{id}', [MotoController::class, 'update'])->name('motos.update');
    Route::delete('/motos/{id}', [MotoController::class, 'delete'])->name('delete');
    Route::get('/admin/usuarios', [AuthController::class, 'index'])->name('listadoClientes');
});

Route::middleware(['auth', 'role:2'])->group(function () {
    
});



Route::get('/sucursales', [SucursalController::class, 'index'])->name('sucursales');

Route::get('/equipo', [EquipoController::class, 'index'])->name('equipo');

