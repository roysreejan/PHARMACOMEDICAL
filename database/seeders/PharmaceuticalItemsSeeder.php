<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PharmaceuticalItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pharmaceutical_items')->insert([
            'userID'=> 4,
            'itemName' => 'Paracetamol',
            'price' => 50,
        ]);
    }
}
