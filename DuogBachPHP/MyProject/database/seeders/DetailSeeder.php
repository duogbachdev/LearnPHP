<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Viet logic code
        DB::table("details")->delete();
        $details = [
            ["user_id" => 1, "birth" => "birth1"],
            ["user_id" => 2, "birth" => "birth2"],
            ["user_id" => 3, "birth" => "birth3"],
            ["user_id" => 4, "birth" => "birth4"],
            ["user_id" => 5, "birth" => "birth5"],
        ];
        DB::table("details")->insert($details);
    }
}
