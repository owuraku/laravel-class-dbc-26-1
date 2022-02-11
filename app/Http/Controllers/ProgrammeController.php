<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    //

     public function showAllProgrammes() {
       $allProgrammes = Programme::paginate(10);
        // return view('courses.list', ['courses' => $allCourses]);
        return view('programmes.list')
                ->with('programmes', $allProgrammes);
    }

    public function showOneProgramme($id){
          $programme = Programme::findOrFail($id);
        // return view('courses.list', ['courses' => $allCourses]);
        return view('programmes.show')
                ->with('programme', $programme);
    }

    public function showAddProgrammePage(){
        return view('programmes.programme-form');
    }

    public function saveProgramme(Request $request){
        $newProgramme = new Programme;
        $newProgramme->name = $request->input('name');
        $newProgramme->duration = $request->input('duration');
        $newProgramme->programme_id = $request->input('programme_id');

        $newProgramme->save();


        return redirect('/programmes');
        //  $request->input()
        // dd($newProgramme);
    }
}
