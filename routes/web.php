<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListJasaController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/pilih-layanan', [ListJasaController::class, 'index'])->name('list-jasa');

// Service Detail Pages - Tugas Akademik
Route::get('/order/makalah-tanpa-materi', fn() => view('tugas-akademik.makalah-tanpa-materi'))->name('order.makalah-tanpa-materi');
Route::get('/order/makalah-ada-materi', fn() => view('tugas-akademik.makalah-ada-materi'))->name('order.makalah-ada-materi');
Route::get('/order/jurnal', fn() => view('tugas-akademik.jurnal'))->name('order.jurnal');
Route::get('/order/joki-tugas', fn() => view('tugas-akademik.joki-tugas'))->name('order.joki-tugas');

// Service Detail Pages - Lamar Pekerjaan
Route::get('/order/cv-kreatif', fn() => view('lamar-pekerjaan.cv-kreatif'))->name('order.cv-kreatif');
Route::get('/order/cv-ats', fn() => view('lamar-pekerjaan.cv-ats'))->name('order.cv-ats');
Route::get('/order/surat-lamaran', fn() => view('lamar-pekerjaan.surat-lamaran'))->name('order.surat-lamaran');
Route::get('/order/gabung-pdf', fn() => view('lamar-pekerjaan.gabung-pdf'))->name('order.gabung-pdf');

// Service Detail Pages - Bisnis
Route::get('/order/web-statis', fn() => view('bisnis.web-statis'))->name('order.web-statis');
Route::get('/order/web-dinamis', fn() => view('bisnis.web-dinamis'))->name('order.web-dinamis');
Route::get('/order/desain-grafis', fn() => view('bisnis.desain-grafis'))->name('order.desain-grafis');
Route::get('/order/data-entry', fn() => view('bisnis.data-entry'))->name('order.data-entry');
Route::get('/order/jasa-ketik-word', fn() => view('bisnis.jasa-ketik-word'))->name('order.jasa-ketik-word');
Route::get('/order/jasa-excel', fn() => view('bisnis.jasa-excel'))->name('order.jasa-excel');

// Payment Route
Route::post('/payment/checkout', [App\Http\Controllers\OrderController::class, 'checkout'])->name('payment.checkout');
