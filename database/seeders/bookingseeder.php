<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\User;
use App\Models\Trips;
use App\Models\Seates;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        // جيب الطلاب من جدول users (اللي إلهم دور student)
        $students = User::whereHas('roles', function($q) {
            $q->where('name', 'student');
        })->get();

        // جيب كل الرحلات
        $trips = Trips::all();

        // جيب كل المقاعد
        $seats = Seates::all();

        $i = 0;
        foreach ($students as $student) {
            // وزع الحجوزات على الرحلات والمقاعد
            $trips = $trips[$i % $trips->count()];
            $seates = $seats->where('bus_id', $trips->bus_id)->skip($i)->first();

            if ($seat) {
                Booking::create([
                    'user_id' => $student->id,
                    'trip_id' => $trips->id,
                    'seat_id' => $seates->id,
                    'status' => 'confirmed',
                ]);
            }

            $i++;
        }
    }
}
