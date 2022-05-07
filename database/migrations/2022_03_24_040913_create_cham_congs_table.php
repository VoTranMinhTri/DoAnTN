<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamCongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cham_congs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nhan_vien_id');
            $table->foreignId('nguoi_cham_cong_id');
            $table->foreignId('he_so_luong_id');
            $table->foreignId('thuong_id');
            $table->foreignId('phu_cap_id');
            $table->integer('thang');
            $table->integer('nam');
            $table->integer('so_ngay_lam_viec');
            $table->integer('so_gio_lam_viec');
            $table->double('ung_truoc');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nhan_vien_id')->references('id')->on('nhan_viens');
            $table->foreign('nguoi_cham_cong_id')->references('id')->on('nhan_viens');
            $table->foreign('he_so_luong_id')->references('ma_hsl')->on('he_so_luongs');
            $table->foreign('phu_cap_id')->references('ma_phu_cap')->on('phu_caps');
            $table->foreign('thuong_id')->references('ma_thuong')->on('thuongs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cham_congs');
    }
}
