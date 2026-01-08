<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trips;

class tripsSeeder extends Seeder
{
    public function run(): void
    {
       Trip::create(['start_time' => '07:30:00', 'end_time' => '08:30:00', 'bus_id' => 1, 'route_id' => 1]); 
       Trip::create(['start_time' => '09:00:00', 'end_time' => '10:00:00', 'bus_id' => 2, 'route_id' => 2]);
        Trip::create(['start_time' => '11:00:00', 'end_time' => '12:00:00', 'bus_id' => 3, 'route_id' => 3]);
     }
}
