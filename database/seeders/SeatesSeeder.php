<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seates;

class SeatesSeeder extends Seeder
{
    public function run(): void
    {
       for ($i = 1; $i <= 40; $i++)
    { 
        
        Seat::create(['seat_number' => $i]);
    
    }
    }
}
