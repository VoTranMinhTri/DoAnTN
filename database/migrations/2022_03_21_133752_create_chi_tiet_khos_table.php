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
            $table->unsignedInteger('kho_id');
            $table->unsignedInteger('chi_tiet_dien_thoai_id');
            $table->float('tong_tien');
            $table->integer('so_luong');
            $table->date('ngay_nhap');
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
        Schema::dropIfExists('chi_tiet_khos');
    }
}
