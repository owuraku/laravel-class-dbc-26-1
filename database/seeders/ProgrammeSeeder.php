<?php

namespace Database\Seeders;

use App\Models\Programme;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programmes')->insert([
            'name' => 'Diploma in Business Computing',
            'programme_id' => 'DBC',
            'duration' => 60
        ]);
         DB::table('programmes')->insert([
            'name' => 'Web Application Development',
            'programme_id' => 'WAD',
            'duration' => 30
        ]);
        //

    }
}
