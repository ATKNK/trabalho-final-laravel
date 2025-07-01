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
            ["name"=> "Copper Shortsword", "baseDamage"=> 5, "knockback"=> 4, "attackSpeed"=> 13, "classId"=> 1],
            ["name"=> "Enchanted Sword", "baseDamage"=> 23, "knockback"=> 4.25, "attackSpeed"=> 21, "classId"=> 1],
            ["name"=> "Bee Keeper", "baseDamage"=> 30, "knockback"=> 5.3, "attackSpeed"=> 20, "classId"=> 1],
            ["name"=> "Starfury", "baseDamage"=> 25, "knockback"=> 5, "attackSpeed"=> 20, "classId"=> 1],
        ];
        DB::table('weapons')->insert($data);
    }
}
