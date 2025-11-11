<?php

use App\Http\Controllers\QuoteController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $testimonials = \App\Models\Testimonial::select('id', 'customer_name', 'customer_photo', 'rating', 'review_text', 'display_order')
        ->where('is_approved', true)
        ->where('featured', true)
        ->orderBy('display_order')
        ->limit(3)
        ->get();

    $beforeAfters = \App\Models\BeforeAfter::query()
        ->active()
        ->ordered()
        ->get();

    // Use cached settings - only 1 query total (or 0 if cached)
    $settingsData = \App\Models\SiteSettings::getAllCached();
    $settings = collect($settingsData)->mapWithKeys(function ($data, $key) {
        return [$key => $data['value'] ?? null];
    });

    return view('home', compact('testimonials', 'beforeAfters', 'settings'));
});

Route::get('/services/{slug}', function (string $slug) {
    $service = Service::where('slug', $slug)
        ->with(['pricingItems' => function ($query) {
            $query->orderBy('display_order');
        }])
        ->firstOrFail();

    return view('service', ['service' => $service]);
})->name('service.show');

Route::get('/quote', [QuoteController::class, 'create'])->name('quote.create');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/locations', function () {
    return view('locations');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/terms-of-service', function () {
    return view('terms-of-service');
})->name('terms');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy');
