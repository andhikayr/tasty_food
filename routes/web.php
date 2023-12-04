<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TastyFoodController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;

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

Route::controller(TastyFoodController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/kontak', 'kontak')->name('index.kontak');
    Route::get('/tentang', 'tentang')->name('index.tentang');
    Route::get('/galeri', 'galeri')->name('index.galeri');
    Route::get('/berita', 'berita')->name('index.berita');
    Route::get('/berita/show/{id}', 'berita_show')->name('index.berita.show');
});

Route::post('/kontak/send', [KontakController::class, 'sendContact'])->name('index.send_contact');

Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('dashboard');
        Route::get('/admin/settings', 'settings')->name('admin.settings');
        Route::get('/logout', 'destroy')->name('admin.logout');
        Route::put('/admin/settings/save_profile', 'updateUsername')->name('admin.edit_profile');
        Route::post('/admin/settings/save_password', 'updatePassword')->name('admin.edit_password');
    });
    Route::controller(BeritaController::class)->group(function () {
        Route::get('/admin/berita', 'index')->name('berita.index');
        Route::get('/admin/berita/create', 'create')->name('berita.create');
        Route::post('/admin/berita/store', 'store')->name('berita.store');
        Route::get('/admin/berita/edit/{id}', 'edit')->name('berita.edit');
        Route::put('/admin/berita/update/{id}', 'update')->name('berita.update');
        Route::delete('/admin/berita/destroy/{id}', 'destroy')->name('berita.destroy');
    });
    Route::controller(KontakController::class)->group(function () {
        Route::get('/admin/message_contact', 'index')->name('message_kontak.index');
        Route::delete('/admin/message_contact/destroy/{id}', 'destroy')->name('message_kontak.destroy');
    });
    Route::controller(GaleriController::class)->group(function () {
        Route::get('/admin/galeri', 'index')->name('galeri.index');
        Route::get('/admin/galeri/create', 'create')->name('galeri.create');
        Route::post('/admin/galeri/store', 'store')->name('galeri.store');
        Route::get('/admin/galeri/edit/{id}', 'edit')->name('galeri.edit');
        Route::put('/admin/galeri/update/{id}', 'update')->name('galeri.update');
        Route::delete('/admin/galeri/destroy/{id}', 'destroy')->name('galeri.destroy');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
