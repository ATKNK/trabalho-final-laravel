<?php

namespace Database\Seeders;

use App\Models\Accessory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PlayerClassSeeder::class);
        $this->call(WeaponSeeder::class);
        $this->call(ArmorSeeder::class);
        $this->call(AccessorySeeder::class);
    }
}
