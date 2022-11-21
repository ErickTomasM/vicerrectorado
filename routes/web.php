<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('designacions/pdf', [App\Http\Controllers\DesignacionController::class, 'pdf'])->name('designacions.pdf');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('docentes', App\Http\Controllers\DocenteController::class, 'index')->names('docentes.index');
//Route::resource('designacions/pdf', App\Http\Controllers\DesignacionController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('docentes', App\Http\Controllers\DocenteController::class);
Route::resource('infraestructuras', App\Http\Controllers\InfraestructuraController::class);
Route::resource('estudios', App\Http\Controllers\EstudioController::class);
Route::resource('designacions', App\Http\Controllers\DesignacionController::class);
Route::resource('reasignacions', App\Http\Controllers\ReasignacionController::class);
Route::resource('horarios', App\Http\Controllers\HorarioController::class);
Route::resource('titulares', App\Http\Controllers\TitulareController::class);
Route::resource('extraordinarios', App\Http\Controllers\ExtraordinarioController::class);
Route::resource('usuarios', App\Http\Controllers\UserController::class);
