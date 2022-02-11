<?php

namespace Database\Seeders;

use App\Models\Programme;
use Carbon\Carbon;
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

        for ($i=0; $i < 200 ; $i++) {
            DB::table('programmes')->insert([
            'name' => 'Diploma in Business Computing '.$i,
            'programme_id' => 'DBC'.$i,
            'duration' => rand(30, 60),
            'created_at' => Carbon::now()
            ]);

            DB::table('programmes')->insert([
            'name' => 'Web Application Development '.$i,
            'programme_id' => 'WAD'.$i,
            'duration' => rand(30, 60),
            'created_at' => Carbon::now()
            ]);
        }


        //

    }
}
