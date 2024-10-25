<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CinestarController;

Route::get('/', [CinestarController::class, 'acceso'])->name('acceso');
Route::post('/acceso', [CinestarController::class, 'procesarAcceso'])->name('procesarAcceso');
Route::post('/registrar', [CinestarController::class, 'registrarUsuario'])->name('registrarUsuario');
Route::post('/logout', [CinestarController::class, 'cerrarSesion'])->name('logout');
Route::get('/home', [CinestarController::class, 'home'])->name('home');
Route::get('/cines', [CinestarController::class, 'cines'])->name('cines');
Route::get('/cines/{id}', [CinestarController::class, 'cine'])->name('cine');
Route::get('/peliculas/{id}', [CinestarController::class, 'peliculas'])->name('peliculas');
Route::get('/pelicula/{id}', [CinestarController::class, 'pelicula'])->name('pelicula');