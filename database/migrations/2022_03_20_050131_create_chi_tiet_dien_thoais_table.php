<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietDienThoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_dien_thoais', function (Blueprint $table) {
            $table->id();
            $table->string('SKU')->primary();
            $table->unsignedBigInteger('dien_thoai_id');
            $table->unsignedBigInteger('man_hinh_id');
            $table->unsignedBigInteger('camera_sau_id');
            $table->unsignedBigInteger('camera_truoc_id');
            $table->unsignedBigInteger('he_dieu_hanh_cpu_id');
            $table->unsignedBigInteger('bo_nho_luu_tru_id');
            $table->unsignedBigInteger('ket_noi_id');
            $table->unsignedBigInteger('pin_sac_id');
            $table->unsignedBigInteger('tien_ich_id');
            $table->unsignedBigInteger('thong_tin_chung_id');
            $table->unsignedBigInteger('mau_sac_id');
            $table->double('gia');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_dien_thoais');
    }
}
