<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhAnhChungCuaDienThoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_anh_chung_cua_dien_thoais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dien_thoai_id');
            $table->string('hinh_anh');
            $table->string('noi_dung')->nullable();;
            $table->integer('loai_hinh');//0 là hình đại diện, 1 là hình giới thiệu chung, 2 là hình mở hộp, ...
            $table->integer('trang_thai');
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
        Schema::dropIfExists('hinh_anh_chung_cua_dien_thoais');
    }
}


