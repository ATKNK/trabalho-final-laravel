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
            ["name" => "Beserker's Glove", "modifierId"=> 6, "effectModifier"=> 12, 'rarity'=> 5, "classId"=> 1],
            ["name" => "Magic Quiver", "modifierId"=> 2, "effectModifier"=> 10, 'rarity'=> 4, "classId"=>2],
            ["name" => "Pygmy Necklace", "modifierId"=> 4, "effectModifier"=> 1, 'rarity'=> 7, "classId"=>4],
            ["name" => "Arcane Flower", "modifierId"=> 7, "effectModifier"=> 8, 'rarity'=> 7, "classId"=>3],
            ["name" => "Recon Scope", "modifierId"=> 2, "effectModifier"=> 10, 'rarity'=> 7, "classId"=>2],
        ];
        DB::table('accessories')->insert($data);
    }
}
