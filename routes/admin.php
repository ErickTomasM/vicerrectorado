<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
Route::get('admin', function () {
    return "hola administrador";
});
//Route::resource('docentes', DocenteController::class, 'index')->names('home');