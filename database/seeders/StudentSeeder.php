<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('students')->insert([
            'firstname' => 'Owura',
            'lastname' => 'Ku',
            'gender' => 'male',
            'date_of_birth' => '2020-10-10',
            'contact' => '0244419419',
            'programme_id' => 1,
            'student_id' => '100200300'
        ]);
    }
}
