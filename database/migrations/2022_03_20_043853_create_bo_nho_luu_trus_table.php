<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoNhoLuuTrusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bo_nho_luu_trus', function (Blueprint $table) {
            $table->id();
            $table->string('ram');
            $table->string('bo_nho_trong');
            $table->string('bo_nho_con_lai');
            $table->string('danh_ba');
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
        Schema::dropIfExists('bo_nho_luu_trus');
    }
}
