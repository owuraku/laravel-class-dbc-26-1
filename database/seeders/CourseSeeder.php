<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Programme;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
        for ($i=0; $i < 200; $i++) {
            $faker = Faker::create();
            $coursename = $faker->word();
            $course = new Course();
            $course->name =ucfirst($coursename). " ".$faker->word()." ".$i;
            $course->duration = $faker->numberBetween(10, 30);
            $course->course_id = $faker->numerify(ucwords($coursename)."###");
            $course->save();
            $course->programmes()->attach($faker->numberBetween(1,400));
        }

    }
}
