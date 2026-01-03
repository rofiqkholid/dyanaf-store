<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Chat API Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('api.chat.send');
    Route::get('/chat/messages/{roomId?}', [ChatController::class, 'getMessages'])->name('api.chat.messages');
    Route::get('/chat/rooms', [ChatController::class, 'getRooms'])->name('api.chat.rooms');
});

// Payment API
Route::post('/payment/checkout', [App\Http\Controllers\OrderController::class, 'checkout'])->name('api.payment.checkout');
Route::post('/payment/checkout-cv', [App\Http\Controllers\OrderController::class, 'checkoutCV'])->name('api.payment.checkout.cv');
Route::post('/payment/cancel', [App\Http\Controllers\OrderController::class, 'cancel'])->name('api.payment.cancel');
Route::post('/payment/success', [App\Http\Controllers\OrderController::class, 'success'])->name('api.payment.success');

// Public API (if needed)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
