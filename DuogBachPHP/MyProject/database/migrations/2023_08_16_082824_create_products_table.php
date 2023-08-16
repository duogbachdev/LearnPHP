<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->string("code", 255)->unique();  // khóa phụ
            $table->string("slug", 255);
            $table->string("info", 255);
            $table->string("describer", 255);
            $table->string("image", 255);
            $table->double("price");
            $table->tinyInteger("featured");
            $table->tinyInteger("state");
            $table->bigInteger("categories_id")->unsigned(); // phải là số dương

            // Tạo cấu trúc liên kết bảng
            $table->foreign("categories_id")
                ->references("id")
                ->on("categories")
                ->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
