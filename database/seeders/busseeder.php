<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Bus::create([
            'plat_number' => '123ABC',
            'driver_id' => 1
        ]);

        Bus::create([
            'plat_number' => '456DEF',
            'driver_id' => 2
        ]);
    }
}
