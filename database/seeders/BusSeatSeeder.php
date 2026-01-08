<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bus;
use App\Models\Seates;
use App\Models\BusSeat;

class BusSeatSeeder extends Seeder
{
    public function run(): void
    {
        $buses = Bus::all();

        foreach ($buses as $bus) {
            // نفترض إن عندك جدول seats فيه 40 مقعد
            $seats = Seates::all();

            foreach ($seats as $seat) {
                BusSeat::create([
                    'bus_id' => $bus->id,
                    'seat_id' => $seat->id,
                ]);
            }
        }
    }
}
