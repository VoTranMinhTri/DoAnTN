<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDienThoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dien_thoais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('thuong_hieu_id');
            $table->string('ten_san_pham',100);
            $table->string('mo_ta',500)->nullable();
            $table->integer('trang_thai');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('thuong_hieu_id')->references('id')->on('thuong_hieus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dien_thoais');
    }
}
