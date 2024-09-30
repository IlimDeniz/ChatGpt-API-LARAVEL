<?php

use Illuminate\Support\Facades\Route;




Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\ChatController::class, 'dashboard'])->name('dashboard');

    Route::get('/aiChatBot', [App\Http\Controllers\ChatController::class, 'aiChatBot'])->name('ai.chat.bot');
    Route::post('/chat', 'App\Http\Controllers\ChatController');

    Route::get('/aiImageBot', [App\Http\Controllers\ImageController::class, 'aiImageBot'])->name('ai.image.bot');
    Route::post('/image', 'App\Http\Controllers\ImageController');

    Route::get('/aiVoiceBot', [App\Http\Controllers\VoiceController::class, 'aiVoiceBot'])->name('ai.voice.bot');
    Route::post('/voice', 'App\Http\Controllers\VoiceController');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
