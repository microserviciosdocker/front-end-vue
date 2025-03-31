<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');
// $response = Http::post('https://auth-service.test/api/v1/auth/register');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('users', UserController::class)->except(['show']);
});
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
