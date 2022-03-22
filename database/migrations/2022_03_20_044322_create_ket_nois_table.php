<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetNoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ket_nois', function (Blueprint $table) {
            $table->id();
            $table->string('mang_di_dong');
            $table->string('sim');
            $table->string('wifi');
            $table->string('gps');
            $table->string('bluetooth');
            $table->string('cong_ket_noi');
            $table->string('jack_tai_nghe');
            $table->string('ket_noi_khac');
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
        Schema::dropIfExists('ket_nois');
    }
}
