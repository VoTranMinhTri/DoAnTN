<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThuongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //https://sites.google.com/site/quanlyluongnhanvien/quan-ly-luong-nhan-vien (cách tính lương)
        Schema::create('thuongs', function (Blueprint $table) {
            $table->string('ma_thuong')->primary();
            $table->double('tien_thuong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuongs');
    }
}
