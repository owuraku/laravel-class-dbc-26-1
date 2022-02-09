<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout.master');
});

// Courses
Route::get('/courses', [CourseController::class, 'showAllCourses']);
Route::get('/courses/add', [CourseController::class, 'showAddCoursePage']);
Route::get('/courses/{id}', [CourseController::class, 'showOneCourse'])->name('viewCourse');

Route::get('/courses/{id}/edit', [CourseController::class, 'showEditCoursePage'])->name('updateCourse');
Route::post('/courses', [CourseController::class, 'saveCourse']);
Route::put('/courses', [CourseController::class, 'updateCourse']);
Route::delete('/courses', [CourseController::class, 'deleteCourse']);




// Programmes
Route::get('/programmes', [ProgrammeController::class, 'showAllProgrammes']);
Route::get('/programmes/add', [ProgrammeController::class, 'showAddProgrammePage']);
Route::get('/programmes/{id}', [ProgrammeController::class, 'showOneProgramme'])->name('viewProgramme');
Route::post('/programmes', [ProgrammeController::class, 'saveProgramme']);


Route::prefix('/students')->group(function(){
    Route::get('/', [StudentController::class, 'showAllStudents']);
    Route::get('/{id}', [StudentController::class, 'showAllStudents'])->name('viewStudent');

    Route::post('/', [StudentController::class, 'showAllStudents']);
    Route::put('/', [StudentController::class, 'showAllStudents'])->name('updateStudent');
    Route::patch('/', [StudentController::class, 'showAllStudents']);



});


