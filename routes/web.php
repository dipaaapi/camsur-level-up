<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ProvincialProfileController;
use App\Http\Controllers\Guest\SocioEconomicController;
use App\Http\Controllers\Guest\NewsVideoController;
use App\Http\Controllers\Guest\SearchController;
use App\Http\Controllers\Admin\HistoryContentController;

Route::get('/', function () {
    return view('pages.guest.home');
})->name('home');

Route::get('/news', [NewsVideoController::class, 'index'])->name('guest.news.index');
Route::get('/news/{slug}', [NewsVideoController::class, 'show'])->name('guest.news.show');
Route::get('/press-releases', [NewsVideoController::class, 'index'])->name('press-releases.index');
Route::get('/videos', [NewsVideoController::class, 'videos'])->name('guest.videos.index');

Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/sitemap', [SearchController::class, 'sitemap'])->name('sitemap');

Route::get('/faq', function () {
    return view('pages.guest.services.faq');
})->name('faq');

Route::get('/services/faq', function () {
    return view('pages.guest.services.faq');
})->name('services.faq');

Route::get('/services/scholarship', function () {
    return view('pages.guest.services.scholarship');
})->name('services.scholarship');

// Backward compatibility alias for educational-assistance
Route::get('/services/educational-assistance', function () {
    return view('pages.guest.services.scholarship');
})->name('services.educational-assistance');

Route::get('/tourism', function () {
    return view('pages.guest.services.tourism');
})->name('tourism');

Route::get('/services/tourism', function () {
    return view('pages.guest.services.tourism');
})->name('services.tourism');

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

Route::get('/socio-economic', [SocioEconomicController::class, 'show'])->name('socio-economic');

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
    Route::post('/overseas/send-inquiry', [JobPostingController::class, 'sendFaqInquiry'])->name('overseas.send-inquiry');

    // SPES & Student Internships
    Route::get('/spes-internships', [JobPostingController::class, 'spesInternships'])->name('spes');
    Route::post('/spes-internships/send-inquiry', [JobPostingController::class, 'sendFaqInquiry'])->name('spes.send-inquiry');

    // Individual Job Details Page
    Route::get('/job/{id}', [JobPostingController::class, 'show'])->name('show');
});

// Citizen Public Inquiry & Feedback Submissions with Rate Limiting (5 requests per minute)
Route::post('/public-inquiry/submit', [\App\Http\Controllers\PublicInquiryController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('public-inquiry.store');

Route::middleware(['auth','verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('history-content', [HistoryContentController::class, 'index'])->name('history-content.index');
    Route::post('history-content/{section}', [HistoryContentController::class, 'store'])->name('history-content.store');
    Route::put('history-content/{section}/{id}', [HistoryContentController::class, 'update'])->name('history-content.update');
    Route::delete('history-content/{section}/{id}', [HistoryContentController::class, 'destroy'])->name('history-content.destroy');

    // Public Inquiries & Feedback CMS
    Route::get('public-inquiries', [\App\Http\Controllers\Admin\AdminPublicInquiryController::class, 'index'])->name('public-inquiries.index');
    Route::put('public-inquiries/{id}', [\App\Http\Controllers\Admin\AdminPublicInquiryController::class, 'update'])->name('public-inquiries.update');
    Route::delete('public-inquiries/{id}', [\App\Http\Controllers\Admin\AdminPublicInquiryController::class, 'destroy'])->name('public-inquiries.destroy');
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
