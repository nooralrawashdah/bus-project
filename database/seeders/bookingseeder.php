<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\User;
use App\Models\Trips;
use App\Models\BusSeat; // موديل الجدول الوسيط

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

        // جيب كل المقاعد الوسيطة (bus-seat)
        $busSeats = BusSeat::all();

        $i = 0;
        foreach ($students as $student) {
            if ($trips->count() === 0 || $busSeats->count() === 0) {
                continue; // إذا ما في بيانات، تخطى
            }

            // وزع الحجوزات على الرحلات والمقاعد
            $trip = $trips[$i % $trips->count()];
            $busSeat = $busSeats->where('bus_id', $trip->bus_id)->skip($i)->first();

            if ($busSeat) {
                Booking::create([
                    'user_id' => $student->id,
                    'trip_id' => $trip->id,
                    '_bus_seat_id' => $busSeat->id, // 👈 استعمل العمود من الجدول الوسيط
                    'status' => 'confirmed',
                ]);
            }

            $i++;
        }
    }
}
