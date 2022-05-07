<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamPhanBosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham_phan_bos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cua_hang_id');
            $table->foreignId('chi_tiet_dien_thoai_id');
            $table->string('so_luong');
            $table->timestamps();
            $table->foreign('cua_hang_id')->references('id')->on('cua_hangs');
            $table->foreign('chi_tiet_dien_thoai_id')->references('id')->on('chi_tiet_dien_thoais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham_phan_bos');
    }
}
