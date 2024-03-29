<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongTinChungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_chungs', function (Blueprint $table) {
            $table->id();
            $table->string('thiet_ke',500);
            $table->string('chat_lieu',500);
            $table->string('kich_thuoc_khoi_luong',500);
            $table->date('thoi_diem_ra_mat');
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
        Schema::dropIfExists('thong_tin_chungs');
    }
}
