<?php

use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ServiceProductController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('establishments', EstablishmentController::class)
->only(['index','store']);

Route::resource('serviceproducts', ServiceProductController::class)
->only(['index','store']);

Route::resource('orderdetails', OrderDetailController::class)
->only(['index','store']);

Route::resource('vehicles', VehicleController::class)
->only(['store','index','show']);