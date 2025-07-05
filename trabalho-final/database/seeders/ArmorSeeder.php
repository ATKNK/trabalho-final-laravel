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
            ["name" => "Wood Armor", "setBonus" => "defense", "setBonusModifier" => 1, "defense" => 3, 'rarity' => 0, "classId" => 1],
            ["name" => "Necro Armor", "setBonus" => "Ranged Damage", "setBonusModifier" => 10, "defense" => 19, 'rarity' => 2, "classId" => 2],
            ["name" => "Hallowed Armor", "setBonus" => "Dodge", "setBonusModifier" => 1, "defense" => 35, 'rarity' => 5, "classId" => 2],
            ["name" => "Meteor Armor", "setBonus" => "Space Gun no cost", "setBonusModifier" => 1, "defense" => 16, 'rarity' => 1, "classId" => 3],
            ["name" => "Spider Armor", "setBonus" => "Summon Damage", "setBonusModifier" => 12, "defense" => 20, 'rarity' => 4, "classId" => 4],
        ];
        DB::table('armors')->insert($data);
    }
}
