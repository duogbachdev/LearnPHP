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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("fullname", 255);
            $table->string("email", 255)->unique();  //không được phép trùng email, có thể là khóa phụ
            $table->string("password", 255);
            $table->string("phone", 255)->nullable(); //có thể bỏ trống không nhập dữ liệu 
            $table->string("address", 255)->nullable();
            $table->tinyInteger("level")->unsigned(); // là số dương không âm
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
