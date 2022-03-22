<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhAnhBannerTrangChusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_anh_banner_trang_chus', function (Blueprint $table) {
            $table->id();
            $table->string('hinh_anh');
            $table->integer('loai_banner');
            $table->integer('vi_tri');
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
        Schema::dropIfExists('hinh_anh_banner_trang_chus');
    }
}
