<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AccessorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name" => "Beserker's Glove", "effect"=> "Melee Attack Speed", "effectModifier"=> 12, 'rarity'=> 5, "classId"=> 1],
            ["name" => "Magic Quiver", "effect"=> "Arrow Damage", "effectModifier"=> 10, 'rarity'=> 4, "classId"=>2],
            ["name" => "Pygmy Necklace", "effect"=> "Minion Slot", "effectModifier"=> 1, 'rarity'=> 7, "classId"=>4],
            ["name" => "Arcane Flower", "effect"=> "Mana Cost Decrease", "effectModifier"=> 8, 'rarity'=> 7, "classId"=>3],
            ["name" => "Recon Scope", "effect"=> "Ranged Damage", "effectModifier"=> 10, 'rarity'=> 7, "classId"=>2],
        ];
        DB::table('accessories')->insert($data);
    }
}
