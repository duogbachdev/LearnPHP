<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tests')->delete();
        $tests = [
            ["name" => "test"],
            ["name" => "test1"],
            ["name" => "test2"],
            ["name" => "test3"],
            ["name" => "test4"],
            ["name" => "test5"],
            ["name" => "test6"],
            ["name" => "test7"],
            ["name" => "test8"],
            ["name" => "test9"],
            ["name" => "test10"],
            ["name" => "test11"],
        ];
        DB::table('tests')->insert($tests);
    }
}
