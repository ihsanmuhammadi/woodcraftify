<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KustomisasiController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboardtes', function () {
    return view('dashboardtes');
});

Route::get('/cardtes', function () {
    return view('cardtes');
});

Route::get('/logintes', function () {
    return view('logintes');
});

Route::get('/registertes', function () {
    return view('registertes');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/daftaruser', [\App\Http\Controllers\UsersController::class, 'index'])->middleware(['auth', 'verified'])->name('user');

// Menampilkan form kustomisasi
Route::get('/kustomisasi', [\App\Http\Controllers\KustomisasiController::class, 'create'])->middleware(['auth', 'verified'])->name('kustomisasi');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
