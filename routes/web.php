<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


//Route::post('/establecer', [EstablecerController::class, 'guardar'])->name('establecer.guardar');
//Route::post('/api-v1/personal-goals', [TuControlador::class, 'guardarMeta']);
Route::get('/formulario', [UsuarioController::class, 'mostrarFormulario'])->name('formulario');
Route::post('/guardar-datos', [UsuarioController::class, 'guardarDatos'])->name('guardar.datos');

/*

Route::get('/', function () {
    return view('Establecer'); // Vista Inicio
})->name('establecer');

Route::get('/inicio', function () {
    return view('inicio'); // Vista de inicio
})->name('inicio');


Route::get('/foro', function () {
    return view('foro');
})->name('foro');

Route::get('/frutas', function () {
    return view('frutas');
})->name('frutas');

Route::get('/seguimiento', function () {
    return view('Seguimiento');
})->name('seguimiento');
*/