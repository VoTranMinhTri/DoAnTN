<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietKhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_khos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kho_id');
            $table->foreignId('chi_tiet_dien_thoai_id');
            $table->double('gia');
            $table->integer('so_luong');
            $table->date('ngay_nhap');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('kho_id')->references('id')->on('kho_id');
            $table->foreign('chi_tiet_dien_thoai_id')->references('id')->on('chi_tiet_dien_thoai_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_khos');
    }
}
