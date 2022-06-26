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
            'name' => 'Jui',
            'email' => 'jui@gmail.com',
            'phoneNumber' => '+880 1521-526641',
            'password' => md5('789789'),
            'dob'=>'2000-02-08',
            'gender'=> 'female',
            'role' => 'patient',
            'verified'=> 'true',
        ]);
    }
}
