<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout.master');
});

Route::get('/courses', [CourseController::class, 'showAllCourses']);
Route::get('/courses/add', [CourseController::class, 'saveCourse']);


