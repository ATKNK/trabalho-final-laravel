<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name" => "Copper Shortsword", "baseDamage" => 5, "knockback" => 4, "attackSpeed" => 13, "rarity" => 0, "classId" => 1],
            ["name" => "Enchanted Sword", "baseDamage" => 23, "knockback" => 4.25, "attackSpeed" => 21, "rarity" => 2, "classId" => 1],
            ["name" => "Bee Keeper", "baseDamage" => 30, "knockback" => 5.3, "attackSpeed" => 20, "rarity" => 3,  "classId" => 1],
            ["name" => "Starfury", "baseDamage" => 25, "knockback" => 5, "attackSpeed" => 20, "rarity" => 2, "classId" => 1],
            ["name" => "Seedler", "baseDamage" => 50, "knockback" => 6, "attackSpeed" => 23, "rarity" => 5, "classId" => 1],
            ["name" => "The Horseman's Blade", "baseDamage" => 150, "knockback" => 7.5, "attackSpeed" => 26, "rarity" => 8, "classId" => 1],
            ["name" => "Influx Waver", "baseDamage" => 100, "knockback" => 4.5, "attackSpeed" => 20, "rarity" => 8, "classId" => 1],
            ["name" => "Star Wrath", "baseDamage" => 170, "knockback" => 6.5, "attackSpeed" => 16, "rarity" => 10, "classId" => 1],
            ["name" => "Meowmere", "baseDamage" => 200, "knockback" => 6.5, "attackSpeed" => 14, "rarity" => 10, "classId" => 1],
        ];
        DB::table('weapons')->insert($data);
    }
}
