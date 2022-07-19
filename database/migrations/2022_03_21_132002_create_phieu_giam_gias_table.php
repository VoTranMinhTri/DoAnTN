<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuGiamGiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_giam_gias', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->double('phan_tram_giam');
            $table->date('ngay_bat_dau');
            $table->date('ngay_het_han');
            $table->integer('trang_thai');
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
        Schema::dropIfExists('phieu_giam_gias');
    }
}
