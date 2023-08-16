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
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                "fullname" => "DuogBachDev",
                "password" => "123456",
                "email" => "admin@admin.com",
                "phone" => "0123456789",
                "address" => "Thái Bình",
                "level" => 1
            ],
            [
                "fullname" => "Nguyễn Văn A",
                "password" => "123456",
                "email" => "vanan@admin.com",
                "phone" => "0123456789",
                "address" => "Hà Nội",
                "level" => 2
            ],
            [
                "fullname" => "Nguyễn Văn B",
                "password" => "123456",
                "email" => "hoangbach@admin.com",
                "phone" => "0123456789",
                "address" => "Thái Nguyên",
                "level" => 1
            ],
            [
                "fullname" => "Nguyễn Văn C",
                "password" => "123456",
                "email" => "haiphong@admin.com",
                "phone" => "0123456789",
                "address" => "Hải Phong",
                "level" => 1
            ],
            [
                "fullname" => "Nguyễn Văn D",
                "password" => "123456",
                "email" => "lamnam@admin.com",
                "phone" => "0123456789",
                "address" => "Thanh Hóa",
                "level" => 1
            ],
        ]);
    }
}
