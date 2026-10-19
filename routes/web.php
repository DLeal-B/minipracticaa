<?php

use App\Http\Controllers\ArtistaController;
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
//Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::resource('artistas', ArtistaController::class)->middleware('auth');
Route::post('/artistas', [ArtistaController::class, 'store'])->name('artistas.store');
Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas.index');
Route::get('/artistas/{artistas}', [ArtistaController::class, 'show'])->name('artistas.show');
Route::get('/artistas/{artistas}/edit', [ArtistaController::class, 'edit'])->name('artistas.edit');
Route::put('/artistas/{artistas}', [ArtistaController::class, 'update'])->name('artistas.update');

require __DIR__.'/auth.php';
