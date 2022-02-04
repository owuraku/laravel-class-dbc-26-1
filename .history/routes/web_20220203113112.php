<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome', ['name' => 'Owuraku']);
});

Route::get('/courses', [CourseController::class, 'showAllCourses']);
