<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PlayerClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name" => "Melee"],
            ["name" => "Ranged"],
            ["name" => "Mage"],
            ["name" => "Summoner"],
        ];
        DB::table('classes')->insert($data);
    }
}
