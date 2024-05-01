<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id' => 'super-admin',
            'name' => 'Super Admin',
        ]);

        Role::create([
            'id' => 'admin',
            'name' => 'Administrator',
        ]);

        Role::create([
            'id' => 'editor',
            'name' => 'Editor',
        ]);
    }
}
