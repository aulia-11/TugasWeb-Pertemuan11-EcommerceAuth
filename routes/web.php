<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // =========================
    // PRODUCT
    // =========================

    // Daftar produk
    Route::get('/products', [ProductController::class, 'index'])
        ->name('products.index');

    // Tambah produk
    // HARUS diletakkan sebelum /products/{product}
    Route::get('/products/create', [ProductController::class, 'create'])
        ->middleware('role:admin,editor')
        ->name('products.create');

    // Simpan produk
    Route::post('/products', [ProductController::class, 'store'])
        ->middleware('role:admin,editor')
        ->name('products.store');

    // Edit produk
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
        ->middleware('role:admin,editor')
        ->name('products.edit');

    // Update produk
    Route::match(['put', 'patch'], '/products/{product}', [ProductController::class, 'update'])
        ->middleware('role:admin,editor')
        ->name('products.update');

    // Detail produk
    Route::get('/products/{product}', [ProductController::class, 'show'])
        ->name('products.show');

    // Hapus produk
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])
        ->middleware('role:admin')
        ->name('products.destroy');


    // =========================
    // PROFILE
    // =========================

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';