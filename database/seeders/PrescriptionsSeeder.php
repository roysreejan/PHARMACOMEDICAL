<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prescriptions')->insert([
            'doctorID' => 3,
            'userID' => 5,
            'pharmaceuticalItemID' => 4,
            'advice' => 'Take it as prescribed',
        ]);
    }
}
