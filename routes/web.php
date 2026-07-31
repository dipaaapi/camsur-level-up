<?php

use Illuminate\Support\Facades\Route;

// Public / Guest Routes
Route::get('/', function () {
    return view('pages.guest.home');
})->name('home');

// Temporary placeholders para sa Phase 2 News & Services
Route::get('/news', function () {
    return view('pages.guest.home'); // o i-point sa news view kapag ready na
})->name('guest.news.index');

Route::get('/services', function () {
    return view('pages.guest.home'); // o i-point sa services view kapag ready na
})->name('guest.services.index');

// Authenticated / Breeze Dashboard Route
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.authenticated.dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
