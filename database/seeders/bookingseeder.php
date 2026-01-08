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
        Booking::create(['date' => '2026-01-10', 'trip_id' => 1, 'user_id' => 2, 'bus_seat_id' => 1]); 
        Booking::create(['date' => '2026-01-10', 'trip_id' => 2, 'user_id' => 2, 'bus_seat_id' => 2]); 
        ABooking::create(['date' => '2026-01-11', 'trip_id' => 3, 'user_id' => 3, 'bus_seat_id' => 3]); 
    }
}
