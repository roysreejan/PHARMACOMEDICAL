<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'userID' => 4,
            'pharmaceuticalItemID' => 1,
            'totalAmount' => 100,
            'hasPaid' => true,
            'paidDate&Time' => '2020-01-01 11:30:00',
        ]);
    }
}
