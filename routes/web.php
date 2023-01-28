<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//booking
Route::controller(App\Http\Controllers\BookingController::class)->prefix('booking')->name('booking.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/store', 'store')->name('store');
    Route::get('/{booking}', 'show')->name('show');
    Route::get('/{booking}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{booking:id}', 'destroy')->name('destroy');
});

//tour
Route::controller(App\Http\Controllers\TourController::class)->prefix('tour')->name('tour.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/store', 'store')->name('store');
    Route::get('/{tour}', 'show')->name('show');
    Route::get('/{tour}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{tour:id}', 'destroy')->name('destroy');
});
