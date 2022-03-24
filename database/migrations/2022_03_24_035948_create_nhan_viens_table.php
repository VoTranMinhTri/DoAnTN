<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('chuc_vu_id');
            $table->unsignedInteger('quan_ly_id');
            $table->unsignedInteger('phong_ban_id');
            $table->unsignedInteger('tai_khoan_quan_ly_id');
            $table->unsignedInteger('tai_khoan_id');
            $table->unsignedInteger('cua_hang_id');
            $table->integer('truong_phong');
            $table->string('ho_ten');
            $table->string('dia_chi');
            $table->date('ngay_sinh');
            $table->string('cccd');
            $table->string('bhxh');
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
        Schema::dropIfExists('nhan_viens');
    }
}
