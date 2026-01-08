<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drivers;

class DriversSeeder extends Seeder
{
    public function run(): void
    {
       Driver::create(['driver_name' => 'Ahmad', 'driver_phone' => '0790000000', 'driver_license_num' => 'D12345']);
        Driver::create(['driver_name' => 'Mohammad', 'driver_phone' => '0791111111', 'driver_license_num' => 'D67890']);
        Driver::create(['driver_name' => 'Khaled', 'driver_phone' => '0792222222', 'driver_license_num' => 'D54321']); 
       Driver::create(['driver_name' => 'Omar', 'driver_phone' => '0793333333', 'driver_license_num' => 'D98765']); 
       Driver::create(['driver_name' => 'Yousef', 'driver_phone' => '0794444444', 'driver_license_num' => 'D11223']);
    
    }
}
