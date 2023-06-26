<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            ['id' => 1, 'name' => 'Laptops', 'description' => 'Portable computers designed for mobility.'],
            ['id' => 2, 'name' => 'Desktops', 'description' => 'Computers designed for use at a desk.'],
            ['id' => 3, 'name' => 'Smartphones', 'description' => 'Mobile phones that are capable of advanced computing.'],
            ['id' => 4, 'name' => 'Tablets', 'description' => 'Portable devices with a touchscreen display.'],
            ['id' => 5, 'name' => 'Gaming PCs', 'description' => 'Powerful computers designed for gaming.'],
            ['id' => 6, 'name' => 'Monitors', 'description' => 'Displays for computers and other devices.'],
            ['id' => 7, 'name' => 'Computer Peripherals', 'description' => 'Accessories for computers such as keyboards, mice, and printers.'],
            ['id' => 8, 'name' => 'Printers', 'description' => 'Devices that produce printed copies of digital documents.'],
            ['id' => 9, 'name' => 'PC Components', 'description' => 'Individual components that can be used to build a computer such as CPUs, GPUs, and RAM.'],
            ['id' => 10, 'name' => 'Audio Equipment', 'description' => 'Speakers, headphones, and other audio accessories for use with computers and other devices.'],
        ]);
    }
}
