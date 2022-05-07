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
            $table->foreignId('chuc_vu_id');
            $table->foreignId('quan_ly_id')->nullable();
            $table->foreignId('phong_ban_id');
            $table->foreignId('tai_khoan_quan_ly_id')->nullable();
            $table->foreignId('tai_khoan_id')->nullable();
            $table->foreignId('cua_hang_id')->nullable();
            $table->boolean('truong_phong');
            $table->string('ho_ten');
            $table->string('dia_chi');
            $table->date('ngay_sinh');
            $table->string('cccd');
            $table->string('bhxh');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('chuc_vu_id')->references('id')->on('chuc_vus');
            $table->foreign('quan_ly_id')->references('id')->on('nhan_viens');
            $table->foreign('phong_ban_id')->references('id')->on('phong_bans');
            $table->foreign('tai_khoan_quan_ly_id')->references('id')->on('tai_khoans');
            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoans');
            $table->foreign('cua_hang_id')->references('id')->on('cua_hangs');
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
