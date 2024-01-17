<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("trains") -> insert([
            [
                "name" => "AX500",
                "passengers" => 54,
                "year" => 2020,
                "train_type_id" => 3
            ],
            [
                "name" => "AX960",
                "passengers" => 150,
                "year" => 2019,
                "train_type_id" => 2
            ],
            [
                "name" => "AX300",
                "passengers" => 200,
                "year" => 2005,
                "train_type_id" => 1
            ]
        ]);
    }
}
