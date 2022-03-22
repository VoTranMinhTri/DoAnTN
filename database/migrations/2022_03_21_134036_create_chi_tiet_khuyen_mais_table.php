<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietKhuyenMaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_khuyen_mais', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('khuyen_mai_id');
            $table->unsignedInteger('chi_tiet_dien_thoai_id');
            $table->float('phan_tram_giam');
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
        Schema::dropIfExists('chi_tiet_khuyen_mais');
    }
}
