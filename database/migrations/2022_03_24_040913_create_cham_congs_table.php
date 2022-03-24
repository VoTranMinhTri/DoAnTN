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
            $table->unsignedInteger('nhan_vien_id');
            $table->unsignedInteger('nguoi_cham_cong_id');
            $table->unsignedInteger('he_so_luong_id');
            $table->unsignedInteger('thuong_id');
            $table->unsignedInteger('phu_cap_id');
            $table->integer('thang');
            $table->integer('nam');
            $table->integer('so_ngay_lam_viec');
            $table->integer('so_gio_lam_viec');
            $table->float('ung_truoc');
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
        Schema::dropIfExists('cham_congs');
    }
}
