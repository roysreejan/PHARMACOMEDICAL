<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            'userID' => 4,
            'doctorID' => 2,
            'appointmentDate&Time' => '2020-06-21 11:00:00',
            'purpose' => 'test',
            'visited' => 'true',
            'hasPaid' => 'true',
            'paidDate&Time' => '2020-06-21 10:00:00',
            'appointmentStatus' => 'true',
            'link' => 'https://meet.google.com/nvg-fcfc-dzp',
        ]);
    }
}
