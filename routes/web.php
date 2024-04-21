<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->middleware([
    \App\Http\Middleware\Demo::class,
])->name('index');

// Route Livewire using the localize middleware to fix fallback language detection
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle)->middleware([
        \App\Http\Middleware\Demo::class,
    ]);
});
