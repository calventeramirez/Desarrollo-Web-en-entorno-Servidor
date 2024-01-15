<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("bebidas") -> insert([
            [
                "nombre" => "Cocacola",
                "precio" => 2.5,
                "cantidad" => "330ml"
            ],
            [
                "nombre" => "Fanta",
                "precio" => 2.25,
                "cantidad" => "330ml"
            ],
            [
                "nombre" => "Cerveza",
                "precio" => 3.5,
                "cantidad" => "1l"
            ]
        ]);
    }
}
