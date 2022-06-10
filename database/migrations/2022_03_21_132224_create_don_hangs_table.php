<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->string('ma_don_hang')->primary();
            $table->foreignId('tai_khoan_khach_hang_id');
            $table->foreignId('tai_khoan_nhan_vien_id')->nullable();
            $table->foreignId('phieu_giam_gia_id')->nullable();
            $table->foreignId('cua_hang_id')->nullable();
            $table->string('ho_ten_nguoi_nhan');
            $table->string('dia_chi_nhan_hang');
            $table->string('so_dien_thoai_nguoi_nhan');
            $table->string('ghi_chu')->nullable();
            $table->integer('phuong_thuc_nhan_hang');
            $table->integer('phuong_thuc_thanh_toan');
            $table->date('ngay_giao')->nullable();
            $table->integer('trang_thai_thanh_toan');
            $table->integer('trang_thai_don_hang');
            $table->timestamps();
            $table->foreign('tai_khoan_khach_hang_id')->references('id')->on('tai_khoans');
            $table->foreign('tai_khoan_nhan_vien_id')->references('id')->on('tai_khoans');
            $table->foreign('phieu_giam_gia_id')->references('id')->on('phieu_giam_gias');
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
        Schema::dropIfExists('don_hangs');
    }
}
