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
         RoutesSeeders::class,
          DriversSeeder::class, 
          BusSeeder::class, 
          SeatesSeeder::class,
           TripsSeeder::class, 
           UsersSeeder::class,
            BookingSeeder::class,
             
             LaratrustSeeder::class,
     ]);
    }
}
