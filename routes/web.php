<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\AttendanceController;


Route::resource('classes', ClassController::class);
Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');
Route::resource('sections', SectionController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('students', StudentController::class);

Route::get('/attendance', [AttendanceController::class,'index'])
    ->name('attendance.index');
Route::post('/attendance', [AttendanceController::class,'store'])
    ->name('attendance.store');