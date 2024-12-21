<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ss', function(){
    return "something";
});
Route::resource('properties', PropertyController::class);