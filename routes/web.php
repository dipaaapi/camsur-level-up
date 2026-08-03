<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvincialProfileController;

// Public / Guest Routes
Route::get('/', function () {
    return view('pages.guest.home');
})->name('home');

Route::get('/news', function () {
    return view('pages.guest.home');
})->name('guest.news.index');

Route::get('/services', function () {
    return view('pages.guest.home');
})->name('guest.services.index');

Route::get('/search', function () {
    return view('pages.guest.search');
})->name('search');

Route::get('/tourism', function () {
    return view('pages.guest.tourism');
})->name('tourism');

Route::get('/bac', function () {
    return view('pages.guest.transparency.bac');
})->name('bac');

Route::get('/citizens-charter', function () {
    return view('pages.guest.transparency.citizens-charter');
})->name('citizens-charter');

Route::get('/seal', function () {
    return view('pages.guest.transparency.seal');
})->name('seal');

Route::get('/profile', [ProvincialProfileController::class, 'index'])->name('profile');

Route::get('/socio-economic', function () {
    return view('pages.guest.about.socio-economic');
})->name('socio-economic');

Route::get('/capitol-history', function () {
    return view('pages.guest.about.capitol-history');
})->name('capitol-history');

Route::get('/province-history', function () {
    return view('pages.guest.about.province-history');
})->name('province-history');

Route::get('/mission-vision', function () {
    return view('pages.guest.about.mission-vision');
})->name('mission-vision');

Route::get('/past-governors', function () {
    return view('pages.guest.about.past-governors');
})->name('past-governors');

Route::get('/press-releases', function () {
    return view('pages.guest.press-releases');
})->name('press-releases.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.authenticated.dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
