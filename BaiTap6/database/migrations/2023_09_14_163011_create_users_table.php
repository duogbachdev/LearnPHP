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
            $table->string("namecode", 255)->unique();
            $table->string("fullname", 255);
            $table->date("datebirth");
            $table->string("address", 255)->nullable(); //có thể bỏ trống không nhập dữ liệu 
            $table->tinyInteger("gender")->unsigned();
            $table->string("class", 255)->nullable();
            $table->tinyInteger("department")->unsigned(); // là số dương không âm
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
