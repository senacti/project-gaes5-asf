<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\generalcontroller;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\CommentController;
use App\Models\Garantia;
use SebastianBergmann\Timer\ResourceUsageFormatter;

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

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});


Route::resource('task', TaskController::class);

Route::controller(generalcontroller::class)->group(function () {
    Route::get('/puntuacion', 'puntuacion')->name('puntuacion');
    Route::get('/contactos', 'contactos')->name('contactos');
    Route::get('/skype', 'skype')->name('skype');

});

Route::resource('citas', CitaController::class);


Route::resource('comments', CommentController::class);
Route::get('comments/generate-pdf', [CommentController::class, 'generatePDF'])->name('comments.generatePDF');
Route::get('/comments/pdf', 'PdfController@generatePdf')->name('comments.pdf');

Route::resource('garantias', App\Htpp\Controllers\GarantiaController::class);
Route::get('/', function () {
    return view('auth.login');
});

Route::get('garantias/pdf', [GarantiaHomeController::class, 'pdf'])->name('garantias.pdf');
Route::resource('garantias', App\Http\Controllers\GarantiaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');