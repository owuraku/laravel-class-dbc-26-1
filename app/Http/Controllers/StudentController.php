<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function showAllStudents(){
        return view('students.list')
        ->with('students', Student::all());
    }

    public function showEditStudentPage($id)
    {
        $student = Student::findOrFail($id);
         return view('students.student-form')
        ->with('student',$student )
        ->with('edit',true )
        ->with('programmes', Programme::all());
        # code...
    }

    public function showAddStudentPage()
    {
          return view('students.student-form')
          ->with('student',new Student )
        ->with('edit',false )
        ->with('programmes', Programme::all());
        # code...
    }
}
