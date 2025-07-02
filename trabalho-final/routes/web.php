<?php

use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerClassController;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\ArmorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/classes', PlayerClassController::class);
Route::resource('/weapons', WeaponController::class);
Route::resource('/armors', ArmorController::class);
Route::resource('/accessories', AccessoryController::class);
Route::resource('/players', PlayerController::class);
