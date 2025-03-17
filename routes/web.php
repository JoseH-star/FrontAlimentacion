<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio'); // Vista de inicio
})->name('inicio');

Route::get('/establecer', function () {
    return view('Establecer');
})->name('establecer');

Route::get('/foro', function () {
    return view('foro');
})->name('foro');

Route::get('/frutas', function () {
    return view('frutas');
})->name('frutas');

Route::get('/seguimiento', function () {
    return view('Seguimiento');
})->name('seguimiento');