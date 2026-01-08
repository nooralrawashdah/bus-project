<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

       $this->call([
         RoleSeeder::class,  
        RegionSeeder::class,
         RouteSeeder::class,
          DriverSeeder::class, 
          BusSeeder::class, 
          SeatSeeder::class,
           TripSeeder::class, 
           UserSeeder::class,
            BookingSeeder::class,
             RoleSeeder::class, 
             LaratrustSeeder::class,
     ]);
    }
}
