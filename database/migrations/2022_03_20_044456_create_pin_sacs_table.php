<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinSacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pin_sacs', function (Blueprint $table) {
            $table->id();
            $table->string('dung_luong_pin');
            $table->string('loai_pin');
            $table->string('ho_tro_sac_toi_da');
            $table->string('cong_nghe_pin');
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
        Schema::dropIfExists('pin_sacs');
    }
}
