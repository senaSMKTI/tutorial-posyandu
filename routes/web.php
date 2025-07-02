<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BabyController;

Route::resource('/babies', BabyController::class);

Route::get('/', function () {
    return view('welcome');
});
