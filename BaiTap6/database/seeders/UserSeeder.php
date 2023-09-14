<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                "namecode" => "72DCTT20006",
                "fullname" => "DuogBachDev",
                "datebirth" => "2003/10/22",
                "address" => "Thái Bình",
                "gender" => 1,
                "class" => "72DCTT21",
                "department" => 1
            ]
        ]);
    }
}
