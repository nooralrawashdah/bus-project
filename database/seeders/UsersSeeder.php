<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
       User::create(['name' => 'Admin User', 'email' => 'admin@example.com', 'password' => bcrypt('password'), 'region_id' => 1]); 
       User::create(['name' => 'Student User', 'email' => 'student@example.com', 'password' => bcrypt('password'), 'region_id' => 2]);
        User::create(['name' => 'Driver User', 'email' => 'driver@example.com', 'password' => bcrypt('password'), 'region_id' => 3]);
     }
}
