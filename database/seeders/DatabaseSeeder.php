<?php

namespace Database\Seeders;

// use database\Seeders\PaymentMethodsTableSeeder;
// use database\Seeders\BrandsTableSeeder;
// use database\Seeders\ProductTypesSeeder;
// use database\Seeders\ProductsSeeder;
// use database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PaymentMethodsSeeder::class,
            BrandsTableSeeder::class,
            ProductTypesSeeder::class,
            ProductsSeeder::class,
            UserSeeder::class
        ]);
    }
}
