<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListJasaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes are for serving views only.
| API routes are in routes/api.php
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/pilih-layanan', [ServiceController::class, 'index'])->name('list-jasa');

// Service Detail Pages - Dynamic (using database)
Route::get('/order/{slug}', [ServiceController::class, 'show'])->name('order.show');

// Keep named routes for compatibility (redirects to dynamic route)
Route::get('/order/makalah-tanpa-materi', fn() => app(ServiceController::class)->show('makalah-tanpa-materi'))->name('order.makalah-tanpa-materi');
Route::get('/order/makalah-ada-materi', fn() => app(ServiceController::class)->show('makalah-ada-materi'))->name('order.makalah-ada-materi');
Route::get('/order/jurnal', fn() => app(ServiceController::class)->show('jurnal'))->name('order.jurnal');
Route::get('/order/joki-tugas', fn() => app(ServiceController::class)->show('joki-tugas'))->name('order.joki-tugas');
Route::get('/order/cv-kreatif', fn() => app(ServiceController::class)->show('cv-kreatif'))->name('order.cv-kreatif');
Route::get('/order/cv-ats', fn() => app(ServiceController::class)->show('cv-ats'))->name('order.cv-ats');
Route::get('/order/surat-lamaran', fn() => app(ServiceController::class)->show('surat-lamaran'))->name('order.surat-lamaran');
Route::get('/order/gabung-pdf', fn() => app(ServiceController::class)->show('gabung-pdf'))->name('order.gabung-pdf');
Route::get('/order/web-statis', fn() => app(ServiceController::class)->show('web-statis'))->name('order.web-statis');
Route::get('/order/web-dinamis', fn() => app(ServiceController::class)->show('web-dinamis'))->name('order.web-dinamis');
Route::get('/order/desain-grafis', fn() => app(ServiceController::class)->show('desain-grafis'))->name('order.desain-grafis');
Route::get('/order/data-entry', fn() => app(ServiceController::class)->show('data-entry'))->name('order.data-entry');
Route::get('/order/jasa-ketik-word', fn() => app(ServiceController::class)->show('jasa-ketik-word'))->name('order.jasa-ketik-word');
Route::get('/order/jasa-excel', fn() => app(ServiceController::class)->show('jasa-excel'))->name('order.jasa-excel');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Chat View Route (protected)
Route::middleware('auth')->group(function () {
    Route::get('/chat', [ChatController::class, 'index'])->name('chat');

    // Keep these for backward compatibility (web session auth)
    Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');
    Route::get('/chat/messages/{roomId?}', [ChatController::class, 'getMessages'])->name('chat.messages');
});
