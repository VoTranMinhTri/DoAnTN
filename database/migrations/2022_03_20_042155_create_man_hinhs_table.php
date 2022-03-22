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
            $table->string('cong_nghe_man_hinh');
            $table->string('do_phan_giai');
            $table->string('man_hinh_rong');
            $table->string('do_sang_toi_da');
            $table->string('mat_kinh_cam_ung');
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
