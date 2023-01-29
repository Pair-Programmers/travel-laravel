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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//booking
Route::controller(App\Http\Controllers\BookingController::class)->prefix('booking')->name('booking.')->group(function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});

//wishlist
Route::controller(App\Http\Controllers\WishlistController::class)->prefix('wishlist')->name('wishlist.')->group(function () {
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/store/{id}', 'store')->name('store');
});

//tour
Route::controller(App\Http\Controllers\TourController::class)->prefix('tour')->name('tour.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{tour}', 'show')->name('show');
    Route::get('/{tour}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{tour:id}', 'destroy')->name('destroy');
});




//adminpanel
// Route::get('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'show'])->name('admin.login.show');
// Route::post('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'login'])->name('admin.login');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::middleware('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\Adminpanel\DashboardController::class, 'index'])->name('dashboard');
        Route::post('admin/logout', [App\Http\Controllers\Adminpanel\AuthController::class, 'logout'])->name('logout');

        //tour
        Route::controller(App\Http\Controllers\Adminpanel\TourController::class)->prefix('tour')->name('tour.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{tour}', 'show')->name('show');
            Route::get('/{tour}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/{tour:id}', 'destroy')->name('destroy');
        });

        //booking
        Route::controller(App\Http\Controllers\Adminpanel\BookingController::class)->prefix('booking')->name('booking.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/{booking}', 'show')->name('show');
            Route::get('/{booking}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/{booking:id}', 'destroy')->name('destroy');
        });
    });

});
