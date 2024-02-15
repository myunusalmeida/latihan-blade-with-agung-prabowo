<?php

use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/semua-paket', [HomeController::class, 'show'])->name('home.package');
Route::get('/semua-paket/{slug}', [HomeController::class, 'detail'])->name('home.package.detail');

Route::get('/dashboard', function () {
    return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('paket', PackageController::class);

require __DIR__ . '/auth.php';
