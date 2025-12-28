<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'Date' => '2025-12-24',
            'user_id' => 1,
            'trip_id' => 1,
        ]);
        Booking::create([
            'Date' => '2025-12-24',
            'user_id' => 2,
            'trip_id' => 1,
        ]);
    }
}
