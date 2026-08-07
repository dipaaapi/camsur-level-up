<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ProvincialProfileController;

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

Route::prefix('careers')->name('careers.')->group(function () {
    // Government Careers & Inquiry
    Route::get('/government', [JobPostingController::class, 'careersWithUs'])->name('government');
    Route::post('/government/send-inquiry', [JobPostingController::class, 'sendFaqInquiry'])->name('government.send-inquiry');

    // Local Jobs Routes
    Route::get('/local-jobs', [JobPostingController::class, 'localJobs'])->name('local');
    Route::get('/local-jobs/filter-graph', [JobPostingController::class, 'filterTrendGraph'])->name('local.filter-graph');
    Route::post('/local-jobs/send-inquiry', [JobPostingController::class, 'sendFaqInquiry'])->name('local-jobs.send-inquiry');

    // Overseas
    Route::get('/overseas', [JobPostingController::class, 'overseasJobs'])->name('overseas');

    // SPES & Student Internships
    Route::get('/spes-internships', [JobPostingController::class, 'spesInternships'])->name('spes');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.authenticated.dashboard');
    })->name('dashboard');
});

// Example route to preview combined auth page
Route::get('/auth/combined', function () {
    return view('auth.combined-auth');
})->name('auth.combined');

require __DIR__.'/auth.php';
