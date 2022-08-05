<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('divinapastora.divinapastora');
})->name("home");

Route::get('espana', function () {
    return view('divinapastora.espana');
})->name("espana");

Route::get('venezuela', function () {
    return view('divinapastora.venezuela');
})->name("venezuela");