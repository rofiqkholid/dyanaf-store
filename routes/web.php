<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListJasaController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/list-jasa', [ListJasaController::class, 'index'])->name('list-jasa');
