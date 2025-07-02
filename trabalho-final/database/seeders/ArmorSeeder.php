<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ArmorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name"=> "Wood Armor", "setBonus"=> "defense", "setBonusModifier"=> 1, "defense"=> 3, "classId"=> 1],
            ["name"=> "Necro Armor", "setBonus"=> "Ranged Damage", "setBonusModifier"=> 10, "defense"=> 19, "classId"=> 2],
        ];
        DB::table('armors')->insert($data);
    }
}
