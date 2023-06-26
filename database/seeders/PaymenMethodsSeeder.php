<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PaymenMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            ['id' => 1, 'name' => 'Cash on Delivery'],
            ['id' => 2, 'name' => 'Debit/Credit Card'],

        ]);
    }
}
