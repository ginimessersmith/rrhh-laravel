<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PostulanteController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\BitacoraController;


Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function () {

    Route::resource('usuarios', UsuarioController::class);
    Route::resource('empleados', EmpleadoController::class);
    Route::resource('postulantes', PostulanteController::class);
    Route::resource('cargos', CargoController::class);
    Route::resource('departamentos', DepartamentoController::class);
    Route::resource('bitacora', BitacoraController::class)->names('bitacora');


    //para los pdfs aqui iran las rutas
    Route::get('/empleados/{empleado}/download-pdf', [EmpleadoController::class, 'downloadPDF'])->name('empleados.pdf');
    Route::get('/postulantes/{postulante}/download-pdf', [PostulanteController::class, 'downloadPDF'])->name('postulantes.pdf');
});
