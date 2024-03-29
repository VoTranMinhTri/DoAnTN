<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManHinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('man_hinhs', function (Blueprint $table) {
            $table->id();
            $table->string('cong_nghe_man_hinh',500);
            $table->string('do_phan_giai',500);
            $table->string('man_hinh_rong',500);
            $table->string('do_sang_toi_da',500);
            $table->string('mat_kinh_cam_ung',500);
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
        Schema::dropIfExists('man_hinhs');
    }
}
