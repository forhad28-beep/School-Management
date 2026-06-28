<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('classes', ClassController::class);
