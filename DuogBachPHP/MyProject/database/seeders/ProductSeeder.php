<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->delete();
        DB::table('products')->insert([
            ['id' => 1, 'code' => 'SP01', 'name' => 'Áo Nữ Sơ Mi Chấm Bi', 'slug' => 'ao-nu-so-mi-cham-bi.jpg', 'price' => 500000, 'featured' => 1, 'state' => 1, 'image' => 'Ao_nu_so_mi_cham_bi.jpg', 'categories_id' => 6, "info" => "Áo Nữ Sơ Mi Chấm Bi", "describer" => "Áo Nữ Sơ Mi Chấm Bi"],
            ['id' => 2, 'code' => 'SP02', 'name' => 'Áo Nữ Phối Viền', 'slug' => 'ao-nu-phoi-vien', 'price' => 60000, 'featured' => 1, 'state' => 0, 'image' => 'ao-nu-phoi-vien.jpg', 'categories_id' => 6, "info" => "Áo Nữ Phối Viền", "describer" => "Áo Nữ Phối Viền"],
            ['id' => 3, 'code' => 'SP03', 'name' => 'Áo Sơ Mi Có Cổ Đúc', 'slug' => 'ao-so-mi-co-co-duc', 'price' => 700000, 'featured' => 0, 'state' => 1, 'image' => 'ao-nu-so-mi-co-co-duc.jpg', 'categories_id' => 6, "info" => "Áo Sơ Mi Có Cổ Đúc", "describer" => "Áo Sơ Mi Có Cổ Đúc"],
            ['id' => 4, 'code' => 'SP04', 'name' => 'Áo sơ mi caro xám Xanh', 'slug' => 'ao-so-mi-caro-xam-xanh', 'price' => 800000, 'featured' => 0, 'state' => 1, 'image' => 'ao-so-mi-ca-ro-xam-xanh-asm1228-10199.jpg', 'categories_id' => 2, "info" => "Áo sơ mi caro xám Xanh", "describer" => "Áo sơ mi caro xám Xanh"],
            ['id' => 5, 'code' => 'SP05', 'name' => 'Áo Sơ Mi Hoạ Tiết Đen', 'slug' => 'ao-so-mi-hoa-tiet-den', 'price' => 900000, 'featured' => 0, 'state' => 1, 'image' => 'ao-so-mi-hoa-tiet-den-asm1223-10191.jpg', 'categories_id' => 2, "info" => "Áo Sơ Mi Hoạ Tiết Đen", "describer" => "Áo Sơ Mi Hoạ Tiết Đen"],
            ['id' => 6, 'code' => 'SP06', 'name' => 'Áo Sơ Mi Trắng Kem', 'slug' => 'ao-so-mi-trang-kem', 'price' => 100000, 'featured' => 1, 'state' => 1, 'image' => 'ao-so-mi-trang-kem-asm836-8193.jpg', 'categories_id' => 2, "info" => "Áo Sơ Mi Trắng Kem", "describer" => "Áo Sơ Mi Trắng Kem"],
            ['id' => 7, 'code' => 'SP07', 'name' => 'Quần kaki Đỏ Nam', 'slug' => 'quan-kaki-do-nam', 'price' => 110000, 'featured' => 1, 'state' => 1, 'image' => 'quan-kaki-do-man-qk162-8273.jpg', 'categories_id' => 3, "info" => "Quần kaki Đỏ Nam", "describer" => "Quần kaki Đỏ Nam"],
            ['id' => 8, 'code' => 'SP08', 'name' => 'Quần kaki Xám', 'slug' => 'quan-kaki-xam', 'price' => 120000, 'featured' => 1, 'state' => 1, 'image' => 'quan-kaki-xam-chuot-dam-qk171-9770.jpg', 'categories_id' => 3, "info" => "Quần kaki Xám", "describer" => "Quần kaki Xám"],
        ]);
    }
}
