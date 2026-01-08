<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drivers;
use App\Models\User;

class DriversSeeder extends Seeder
{
    public function run(): void
    {
      $driversUsers = User::whereHas('roles', function($q) {
    $q->where('name', 'driver');
})->get();

foreach ($driversUsers as $user) {
    Driver::create([
        'driver_name' => $user->name,
        'driver_phone' => $user->phone,
        'driver_license_num' => 'D' . rand(10000, 99999),
    ]);
}

    }
}
