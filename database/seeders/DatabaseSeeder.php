<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'employee']);
    }
}
