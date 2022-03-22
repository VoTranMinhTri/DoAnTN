<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhAnhMauSacCuaDienThoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_anh_mau_sac_cua_dien_thoais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dien_thoai_id');
            $table->unsignedBigInteger('mau_sac_id');
            $table->string('hinh_anh');
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
        Schema::dropIfExists('hinh_anh_mau_sac_cua_dien_thoais');
    }
}
