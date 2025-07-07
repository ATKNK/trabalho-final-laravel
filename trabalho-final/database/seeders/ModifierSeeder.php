<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ModifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name" => "Increased Melee Damage", "math" => "+%"],
            ["name" => "Increased Ranged Damage", "math" => "+%"],
            ["name"=> "Increased Defense", "math"=> "+"],
            ["name"=> "Minion Slot", "math"=> "+"],
            ["name"=> "Dodge", "math"=>"+"],
            ["name"=> "Increased Melee Speed", "math"=> "+%"],
            ["name"=> "Decreased Mana Cost", "math"=> "-%"],
        ];
        DB::table('modifiers')->insert($data);
    }
}
