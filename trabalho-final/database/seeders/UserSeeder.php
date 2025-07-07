<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name" => "ATKNK", "email" => "arthurnakayama@gmail.com", "password" => "123456123", "role" => "admin"]
        ];
        DB::table('users')->insert($data);
    }
}
