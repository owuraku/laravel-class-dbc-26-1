<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Programme;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $programme = Programme::find(1);
        $course = new Course();
        $course->name = "Laravel Essentials";
        $course->duration = 15;
        $course->course_id = 'LAV100';
        $course->save();
        $course->programmes()->attach($programme);
    }
}
