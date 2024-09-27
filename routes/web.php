<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ThankYouController;
use App\Models\Destination;
use App\Models\FAQ;
use App\Models\Gallery;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\Page;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render(
        'Home',
        [

            'destinations' => Destination::limit(6)->get(),
            'packages' => Package::limit(6)->get(),
            'page' => Page::where('name', 'Home')->first(),
            'hotels' => Hotel::limit(6)->get(),
            'faq' => FAQ::limit(4)->get(),

        ]

    );
})->name('home');

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');


Route::get('/packages', function () {
    return Inertia::render(
        'Packages',
        [
            'packages' => Package::with('destinations')->get(),
            'page' => Page::where('name', 'Packages')->first(),

        ]
    );
})->name('packages');



Route::get('/packages/{slug}', function ($slug) {
    return Inertia::render(
        'PackageDetail',
        [
            'package' => Package::with('destinations')->where('url_slug', $slug)->first(),
        ]
    );
})->name('package.detail');


Route::get('/destinations', function () {
    return Inertia::render(

        'Destinations',
        [
            'destinations' => Destination::all(),
            'page' => Page::where('name', 'Destinations')->first(),


        ]
    );
})->name('destinations');

Route::get('/destinations/{slug}', function ($slug) {
    return Inertia::render(
        'DestinationDetail',
        [
            'destination' => Destination::with('packages.destinations')->where('url_slug', $slug)->first(),
        ]
    );
})->name('destination.detail');


Route::get('/hotels', function () {
    return Inertia::render(
        'Hotels',
        [
            'hotels' => Hotel::all(),
            'page' => Page::where('name', 'Hotels')->first(),
        ]
    );
})->name('hotels');


Route::get('/hotels/{slug}', function ($slug) {
    return Inertia::render(
        'HotelDetail',
        [
            'hotel' => Hotel::where('url_slug', $slug)->first(),
        ]
    );
})->name('hotel.detail');



Route::get('/gallery', function () {
    return Inertia::render(
        'Gallery',
        [
            'gallery' => Gallery::all(),
            'page' => Page::where('name', 'Gallery')->first(),
        ]
    );
})->name('gallery');


Route::get('/reviews', function () {
    return Inertia::render(
        'Reviews',
        [
            'page' => Page::where('name', 'Reviews')->first(),
        ]
    );
})->name('reviews');



Route::get('/contact-us', function () {
    return Inertia::render(
        'ContactUs',
        [
            'page' => Page::where('name', 'Contact-us')->first(),
        ]
    );
})->name('contact_us');


Route::get('/privacy-policy', function () {
    return Inertia::render('PrivacyPolicy', [
        'page' => Page::find(1)
    ]);
})->name('privacy_policy');

Route::get('/faq', function () {
    return Inertia::render(
        'FAQ',
        [
            'faq' => FAQ::all(),
        ]
    );
})->name('faq');

Route::get('/thank-you', [ThankYouController::class, 'index'])->name('thankyou');



Route::post('/leads', [LeadController::class, 'store']);