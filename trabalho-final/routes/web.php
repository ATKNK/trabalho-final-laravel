<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerClassController;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\ArmorController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SetupController;

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

Route::resource('/classes', PlayerClassController::class);
Route::resource('/weapons', WeaponController::class);
Route::resource('/armors', ArmorController::class);
Route::resource('/accessories', AccessoryController::class);
Route::resource('/players', PlayerController::class);
Route::resource('/setups', SetupController::class);

require __DIR__.'/auth.php';
