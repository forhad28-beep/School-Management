<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('classes', ClassController::class);
Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');
Route::resource('sections', SectionController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('teachers', TeacherController::class);