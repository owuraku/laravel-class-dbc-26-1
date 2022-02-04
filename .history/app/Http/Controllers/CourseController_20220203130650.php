<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //

    public function showAllCourses() {

        $allCourses = Course::all();
        return view('courses.list', ['courses' => $allCourses]);
    }
}
