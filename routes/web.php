<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\generalcontroller;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PuntuacionController;

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

Route::get('/', function () {
    return view('skype');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/users/pdf', 'generatePdf')->name('users.pdf');
});

Route::resource('task', TaskController::class);

Route::controller(generalcontroller::class)->group(function() {
    Route::get('/agendar', 'agendar')->name('agendar');
    Route::get('/contactos', 'contactos')->name('contactos');
    Route::get('/puntuacion', 'puntuacion')->name('puntuacion');
    Route::get('/skype', 'skype')->name('skype');

});

Route::controller(CitaController::class)->group(function() {
Route::post('/guardar', 'guardar')->name('guardar');
Route::delete('/eliminar',  'eliminar')->name('eliminar');
Route::get('/reagendar', 'reagendar')->name('reagendar');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/info', function () {
//     return view('info');
// })->name('info');

// Route::get('/inicio', function () {
//     return view('inicio');
// })->name('inicio');

// Route::get('/registro', function () {
//     return view('registro');
// })->name('registro');

// Route::get('/clienteindex', function () {
//     return view('clienteindex');
// })->name('clienteindex');

// Route::get('/clienteangendar', function () {
//     return view('clienteangendar');
// })->name('agendar');

// Route::get('/clientecontac', function () {
//     return view('clientecontac');
// })->name('contactos');

// Route::get('/clientecalificacion', function () {
//     return view('clientecalificacion');
// })->name('calificacion');
