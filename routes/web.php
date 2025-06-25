<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\User\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('pages.home');
})->name('home');
Route::get('/movies/{slug}', [HomeController::class, 'show'])->name('movies.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('movies', \App\Http\Controllers\Admin\MovieController::class);
});
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

require __DIR__.'/auth.php';
