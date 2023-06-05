<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/info', function () {
    return view('info');
})->name('info');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/clienteindex', function () {
    return view('clienteindex');
})->name('clienteindex');

Route::get('/clienteangendar', function () {
    return view('clienteangendar');
})->name('agendar');

Route::get('/clientecontac', function () {
    return view('clientecontac');
})->name('contactos');

Route::get('/clientecalificacion', function () {
    return view('clientecalificacion');
})->name('calificacion');