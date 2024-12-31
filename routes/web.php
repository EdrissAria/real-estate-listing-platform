<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::resource('properties', PropertyController::class);
    Route::resource('categories', CategoryController::class);
});

Route::prefix('/')->group(function () {
});