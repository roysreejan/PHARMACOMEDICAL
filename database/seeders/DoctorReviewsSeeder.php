<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctor_reviews')->insert([
            'doctorID' => 2,
            'userID' => 5,
            'point' => 4.5,
            'description' => 'Good doctor',
        ]);
    }
}
