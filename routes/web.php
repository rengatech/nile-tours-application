<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ShowController;
use App\Models\Package;
use App\Models\Hotel;
use App\Models\Gallery;
use App\Models\Destination;
use App\Models\Page;
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
            'packages' => Package::all(),
            'page' => Page::where('name', 'Home')->first(),
            'hotels' => Hotel::all(),

        ]

    );
})->name('home');



Route::get('/packages', function () {
    return Inertia::render(
        'Packages',
        [
            'packages' => Package::all(),
            'page' => Page::where('name', 'Packages')->first(),

        ]
    );
})->name('packages');



Route::get('/packages/{slug}', function ($slug) {
    return Inertia::render(
        'PackageDetail',
        [
            'package' => Package::where('url_slug', $slug)->first(),
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


Route::get('/hotels', function () {
    return Inertia::render(
        'Hotels',
        [
            'hotels' => Hotel::all(),
            'page' => Page::where('name', 'Hotels')->first(),
        ]
    );
})->name('hotels');



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
        'Contact-us',
        [
            'page' => Page::where('name', 'Contact-us')->first(),
        ]
    );
})->name('contact_us');


Route::post('/leads', [LeadController::class, 'store']);
