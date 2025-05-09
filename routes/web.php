<?php

use App\Http\Controllers\Catalogo;
use Illuminate\Support\Facades\Route;

Route::get('/', [Catalogo::class, 'inicio'])->name('inicio');

Route::get('/peliculas', [Catalogo::class, 'index'])->name('peliculas.index');
Route::get('/peliculas/agregar', [Catalogo::class, 'create'])->name('peliculas.create');
Route::post('/peliculas', [Catalogo::class, 'store'])->name('peliculas.store');
Route::get('/peliculas/{id}/editar', [Catalogo::class, 'edit'])->name('peliculas.edit');
Route::put('/peliculas/{id}', [Catalogo::class, 'update'])->name('peliculas.update');
Route::delete('/peliculas/{id}', [Catalogo::class, 'destroy'])->name('peliculas.destroy');


