<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'userID' => 4,
            'name' => 'Adi',
            'email' => 'adi@gmail.com',
            'phoneNumber' => '+880 1521-526630',
            'password' => md5('456456'),
            'dob'=>'1998-11-30',
            'gender'=> 'male',
            'role' => 'pharmacist',
            'verified'=> 'true',
        ]);
    }
}
