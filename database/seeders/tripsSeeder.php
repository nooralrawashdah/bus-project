<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trips;
use App\Models\Bus;
use App\Models\Routes;

class tripsSeeder extends Seeder
{
    public function run(): void
    {
       $buses = Bus::all();
       $routes = Routes::all();
       
       $tripData = [ ['start_time' => '07:30:00', 'end_time' => '08:30:00'],
        ['start_time' => '09:00:00', 'end_time' => '10:00:00'], 
        ['start_time' => '11:00:00', 'end_time' => '12:00:00'], 
        ['start_time' => '13:00:00', 'end_time' => '14:00:00'],
     ];

     $i = 0; 
     
     foreach ($buses as $bus)
      { 
        $route = $routes[$i % $routes->count()]; 
        $tripInfo = $tripData[$i % count($tripData)]; 
        Trip::create([ 'start_time' => $tripInfo['start_time'], 'end_time' => $tripInfo['end_time'], 'bus_id' => $bus->id, 'route_id' => $route->id,
     ]); 
        $i++;

     }
}
}
