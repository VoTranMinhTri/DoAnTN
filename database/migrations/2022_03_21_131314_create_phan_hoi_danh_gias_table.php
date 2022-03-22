<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhanHoiDanhGiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phan_hoi_danh_gias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('danh_gia_id');
            $table->unsignedBigInteger('tai_khoan_id');
            $table->string('noi_dung');
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
        Schema::dropIfExists('phan_hoi_danh_gias');
    }
}
