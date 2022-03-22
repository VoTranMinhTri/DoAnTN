<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeDieuHanhCPUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('he_dieu_hanh_cpus', function (Blueprint $table) {
            $table->id();
            $table->string('he_dieu_hanh');
            $table->string('chip_xu_ly');
            $table->string('toc_do_cpu');
            $table->string('chip_do_hoa');
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
        Schema::dropIfExists('he_dieu_hanh_cpus');
    }
}
