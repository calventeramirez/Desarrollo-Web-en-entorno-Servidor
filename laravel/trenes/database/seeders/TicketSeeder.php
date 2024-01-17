<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tickets") -> insert([
            [
                "date" => "2024-01-02",
                "price" => 2.35,
                "train_id" => 3,
                "ticket_type_id" => 1
            ],
            [
                "date" => "2024-01-05",
                "price" => 45.39,
                "train_id" => 2,
                "ticket_type_id" => 2
            ],
            [
                "date" => "2023-05-08",
                "price" => 120.35,
                "train_id" => 1,
                "ticket_type_id" => 3
            ]
        ]);
    }
}
