<?php
use App\Http\Controllers\Shop\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/collections', [ProductController::class, 'index'])->name('collections');
Route::get('/products', [ProductController::class, 'index'])->name('shop.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('shop.show');

require __DIR__.'/auth.php';
