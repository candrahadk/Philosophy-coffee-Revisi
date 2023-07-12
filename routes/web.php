<?php

use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;

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



Route::controller(WebsiteController::class)->group(function () {
    Route::get('/',  'index')->name('home');
    Route::get('/menu',  'menu')->name('menu');
    Route::get('/reservation',  'reservation')->name('reservation');
    Route::get('/about',  'about')->name('about');
    Route::get('/contact',  'contact')->name('contact');
});


Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');


Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'verified']],
    function () {
        // dashboard
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard',  'index')->name('dashboard');
        });


        // menu
        Route::controller(MenuController::class)->group(function () {
            Route::get('/menu', 'index')->name('menu.index');
            Route::get('/menu/create', 'create')->name('menu.create');
            Route::get('/menu/edit/{id}', 'edit')->name('menu.edit');
            Route::put('/menu/update', 'update')->name('menu.update');
            Route::post('/menu/store', 'store')->name('menu.store');
            Route::delete('/menu/destroy/{id}', 'destroy')->name('menu.destroy');
        });

        // reservation
        Route::controller(ReservationController::class)->group(function () {
            Route::get('/reservation', 'index')->name('reservation.index');
            Route::delete('/reservation/destroy/{id}', 'destroy')->name('reservation.destroy');

            Route::patch('/reservation/confirm/{id}', 'confirm')->name('reservation.confirm');
        });

        // profil
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete(
            '/profile',
            [ProfileController::class, 'destroy']
        )->name('profile.destroy');
    }
);





require __DIR__ . '/auth.php';
