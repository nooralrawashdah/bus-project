<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seates;
use App\Models\Bus;

class SeatesSeeder extends Seeder
{
    public function run(): void
    {
        $buses = Bus::all();

        foreach ($buses as $bus) {
            for ($i = 1; $i <= 40; $i++) {
                Seates::create([
                    'seat_number' => $i,
                    'bus_id' => $bus->id, 
                ]);
            }
        }
    }
}
