<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


Route::get('/test-bienestar', [TestController::class, 'showForm'])->name('test.show');
Route::post('/test-bienestar', [TestController::class, 'store'])->name('test.store');

Route::get('/inicio-alimentacion', function () {
    return view('inicioAlimentacion');
});


Route::get('/', function () {
    return view('Establecer');
})->name('establecer');

Route::get('/inicio', function () {
    return view('inicio');
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
