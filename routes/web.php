<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ShowController;
use App\Models\Package;
use App\Models\Gallery;
use App\Models\Destination;
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


        ]
    );
})->name('home');



Route::get('/packages', function () {
    return Inertia::render(
        'Packages',
        [
            'packages' => Package::all(),
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
            'destination' => Destination::all(),
        ]
    );
})->name('destinations');

Route::get('/hotels', function () {
    return Inertia::render('Hotels');
})->name('hotels');



Route::get('/gallery', function () {
    return Inertia::render(
        'Gallery',
        [
            'gallery' => Gallery::all(),
        ]
    );
})->name('gallery');


Route::get('/reviews', function () {
    return Inertia::render('Reviews');
})->name('reviews');

Route::get('/contact-us', function () {
    return Inertia::render('Contact-us');
})->name('contact_us');

Route::post('/leads', [LeadController::class, 'store']);
