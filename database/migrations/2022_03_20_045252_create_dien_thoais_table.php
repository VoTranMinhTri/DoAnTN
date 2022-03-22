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
            $table->unsignedBigInteger('thuong_hieu_id');
            $table->string('ten_san_pham');
            $table->string('mo_ta');
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
        Schema::dropIfExists('dien_thoais');
    }
}
