<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Nam', 'slug' => 'nam', 'parent' => 0],
            ['id' => 2, 'name' => 'Áo Nam', 'slug' => 'ao-nam', 'parent' => 1],
            ['id' => 3, 'name' => 'Quần Nam', 'slug' => 'quan-nam', 'parent' => 1],
            ['id' => 5, 'name' => 'Nữ', 'slug' => 'nu', 'parent' => 0],
            ['id' => 6, 'name' => 'Áo Nữ', 'slug' => 'ao-nu', 'parent' => 5],
            ['id' => 7, 'name' => 'Quần Nữ', 'slug' => 'quan-nu', 'parent' => 5]
        ]);
    }
}
