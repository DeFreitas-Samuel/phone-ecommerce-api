<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['id' => 1, 'name' => 'Apple', 'description' => 'Manufacturer of iPhones, iPads, and Macs.'],
            ['id' => 2, 'name' => 'Samsung', 'description' => 'Manufacturer of Galaxy phones and tablets.'],
            ['id' => 3, 'name' => 'Dell', 'description' => 'Manufacturer of desktop and laptop computers.'],
            ['id' => 4, 'name' => 'HP', 'description' => 'Manufacturer of desktop and laptop computers and printers.'],
            ['id' => 5, 'name' => 'Microsoft', 'description' => 'Manufacturer of Surface tablets and laptops.'],
            ['id' => 6, 'name' => 'Lenovo', 'description' => 'Manufacturer of ThinkPad laptops and Yoga tablets.'],
            ['id' => 7, 'name' => 'Asus', 'description' => 'Manufacturer of laptops, desktops, and gaming computers.'],
            ['id' => 8, 'name' => 'Acer', 'description' => 'Manufacturer of laptops and desktops for everyday use.'],
            ['id' => 9, 'name' => 'Sony', 'description' => 'Manufacturer of Vaio laptops and Xperia phones.'],
            ['id' => 10, 'name' => 'LG', 'description' => 'Manufacturer of smartphones and home appliances.'],
            ['id' => 11, 'name' => 'AMD', 'description' => 'Advanced Micro Devices, Inc. is a semiconductor company that develops computer processors and related technologies for business and consumer markets.'],
            ['id' => 12, 'name' => 'NVIDIA', 'description' => 'NVIDIA Corporation is a technology company that specializes in designing graphics processing units (GPUs) for the gaming, professional visualization, data center, and automotive markets.']
        ]);
    }
}
