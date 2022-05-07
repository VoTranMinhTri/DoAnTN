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
            $table->string('mang_di_dong',500);
            $table->string('sim',500);
            $table->string('wifi',500);
            $table->string('gps',500);
            $table->string('bluetooth',500);
            $table->string('cong_ket_noi',500);
            $table->string('jack_tai_nghe',500);
            $table->string('ket_noi_khac',500);
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
