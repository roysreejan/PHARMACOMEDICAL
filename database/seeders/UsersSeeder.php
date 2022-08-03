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
            'name' => 'Sreejan Roy',
            'email' => 'sreejanroy@gmail.com',
            'phoneNumber' => '+880 1521-526627',
            'password' => md5('123456'),
            'dob'=>'2000-02-08',
            'gender'=> 'male',
            'role' => 'admin',
            'verified'=> 'true',
        ]);
        DB::table('users')->insert([
            'name' => 'Sreejan',
            'email' => 'sreejan@gmail.com',
            'phoneNumber' => '+880 1521-526628',
            'password' => md5('147741'),
            'dob'=>'2000-02-08',
            'gender'=> 'male',
            'role' => 'doctor',
            'verified'=> 'true',
        ]);
        DB::table('users')->insert([
            'name' => 'Apurba',
            'email' => 'apurba@gmail.com',
            'phoneNumber' => '+880 1521-526629',
            'password' => md5('123123'),
            'dob'=>'2000-02-08',
            'gender'=> 'male',
            'role' => 'patient',
            'verified'=> 'true',
        ]);
        DB::table('users')->insert([
            'name' => 'Shoumik',
            'email' => 'shoumik@gmail.com',
            'phoneNumber' => '+880 1521-526630',
            'password' => md5('456456'),
            'dob'=>'2000-02-08',
            'gender'=> 'male',
            'role' => 'pharmacist',
            'verified'=> 'true',
        ]);
    }
}
