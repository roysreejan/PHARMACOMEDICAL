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
            'name' => 'Dip',
            'email' => 'dip@gmail.com',
            'phoneNumber' => '+880 1521-526631',
            'password' => md5('456654'),
            'dob'=>'1999-02-08',
            'gender'=> 'male',
            'role' => 'pharmacist',
            'verified'=> 'true',
        ]);
    }
}
