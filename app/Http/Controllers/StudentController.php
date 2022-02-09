<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function showAllStudents(){
        return view('students.list')
        ->with('students', Student::all());
    }
}
