<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTienIchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tien_iches', function (Blueprint $table) {
            $table->id();
            $table->string('bao_mat_nang_cao');
            $table->string('tinh_nang_dac_biet');
            $table->string('khang_nuoc_bui');
            $table->string('xem_phim');
            $table->string('nghe_nhac');
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
        Schema::dropIfExists('tien_iches');
    }
}
