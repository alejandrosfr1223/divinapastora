<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('conventodesevilla.conventodesevilla');
})->name("home");