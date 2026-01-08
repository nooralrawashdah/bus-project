<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bus;
class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Bus::create(['plat_number' => '20-12345', 'drivers_id' => 1]);
        Bus::create(['plat_number' => '20-67890', 'drivers_id' => 2]); 
        Bus::create(['plat_number' => '20-54321', 'drivers_id' => 3]); 
    }
}
