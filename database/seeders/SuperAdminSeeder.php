<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'htdung83@gmail.com',
            'password' => bcrypt('123456'),
            'email_verified_at' => now(),
        ])->assignRole('super-admin');
    }
}
