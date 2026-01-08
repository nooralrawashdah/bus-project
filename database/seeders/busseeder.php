<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bus;
use App\Models\Drivers;
class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $drivers = Drivers::all(); 
       $plateNumbers =
        [ '20-12345', 
        '20-67890', 
        '20-54321', 
        '20-98765',
     ];
  $i = 0; foreach ($drivers as $driver)
   {
     Bus::create([
         'plat_number' => $plateNumbers[$i] ?? '20-' . rand(10000, 99999), 'drivers_id' => $drivers->id, ]); $i++;
 }      

}
}


