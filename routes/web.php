<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactusController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('product/{productId}', [HomeController::class, 'productDetail'])->name('product-detail');
Route::post('contact-us', [ContactusController::class, 'send'])->name('contact-us-send');

Route::namespace('App\\Http\\Controllers\\Admin')->prefix('admin')->name('admin.')->group(function() {
    Route::get('login', 'AuthController@index')->name('login');
    Route::post('login', 'AuthController@store')->name('login.submit');

    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', 'AuthController@destroy')->name('logout');
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/profile', 'DashboardController@profile')->name('profile');
        Route::put('/profile', 'DashboardController@update_profile')->name('profile.submit');

        Route::get('/change-password', 'DashboardController@change_password')->name('change-password');
        Route::put('/change-password', 'DashboardController@update_password')->name('change-password.submit');

        Route::resource('galleries', 'GalleryController');
        Route::resource('products', 'ProductController');
    });
});
