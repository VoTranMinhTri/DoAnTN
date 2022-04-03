<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dien_thoais', function (Blueprint $table) {
            $table->foreign('thuong_hieu_id')->references('id')->on('thuong_hieus');
        });
        Schema::table('chi_tiet_dien_thoais', function (Blueprint $table) {
            $table->foreign('dien_thoai_id')->references('id')->on('dien_thoais');
            $table->foreign('man_hinh_id')->references('id')->on('man_hinhs');
            $table->foreign('camera_sau_id')->references('id')->on('camera_saus');
            $table->foreign('camera_truoc_id')->references('id')->on('camera_truocs');
            $table->foreign('he_dieu_hanh_cpu_id')->references('id')->on('he_dieu_hanh_cpus');
            $table->foreign('bo_nho_luu_tru_id')->references('id')->on('bo_nho_luu_trus');
            $table->foreign('ket_noi_id')->references('id')->on('ket_nois');
            $table->foreign('pin_sac_id')->references('id')->on('pin_sacs');
            $table->foreign('tien_ich_id')->references('id')->on('tien_iches');
            $table->foreign('thong_tin_chung_id')->references('id')->on('thong_tin_chungs');
            $table->foreign('mau_sac_id')->references('id')->on('mau_sacs');
        });
        Schema::table('hinh_anh_chung_cua_dien_thoais', function (Blueprint $table) {
            $table->foreign('dien_thoai_id')->references('id')->on('dien_thoais');
        });
        Schema::table('hinh_anh_mau_sac_cua_dien_thoais', function (Blueprint $table) {
            $table->foreign('dien_thoai_id')->references('id')->on('dien_thoais');
            $table->foreign('mau_sac_id')->references('id')->on('mau_sacs');
        });
        Schema::table('tai_khoans', function (Blueprint $table) {
            $table->foreign('loai_tai_khoan_id')->references('id')->on('loai_tai_khoans');
            $table->foreign('bac_tai_khoan_id')->references('id')->on('bac_tai_khoans');
        });
        Schema::table('thong_tin_tai_khoans', function (Blueprint $table) {
            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoans');
        });
        Schema::table('danh_gias', function (Blueprint $table) {
            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoans');
            $table->foreign('dien_thoai_id')->references('id')->on('dien_thoais');
        });
        Schema::table('phan_hoi_danh_gias', function (Blueprint $table) {
            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoans');
            $table->foreign('danh_gia_id')->references('id')->on('danh_gias');
        });
        Schema::table('don_hangs', function (Blueprint $table) {
            $table->foreign('tai_khoan_khach_hang_id')->references('id')->on('tai_khoans');
            $table->foreign('tai_khoan_nhan_vien_id')->references('id')->on('tai_khoans');
            $table->foreign('phieu_giam_gia_id')->references('id')->on('phieu_giam_gias');
        });
        Schema::table('chi_tiet_don_hangs', function (Blueprint $table) {
            $table->foreign('don_hang_id')->references('id')->on('don_hangs');
            $table->foreign('chi_tiet_dien_thoai_id')->references('id')->on('chi_tiet_dien_thoais');
        });
        Schema::table('san_pham_phan_bos', function (Blueprint $table) {
            $table->foreign('cua_hang_id')->references('id')->on('cua_hangs');
            $table->foreign('chi_tiet_dien_thoai_id')->references('id')->on('chi_tiet_dien_thoais');
        });
        Schema::table('khos', function (Blueprint $table) {
            $table->foreign('tai_khoan_quan_ly_kho_id')->references('id')->on('tai_khoans');
        });
        Schema::table('chi_tiet_khos', function (Blueprint $table) {
            $table->foreign('kho_id')->references('id')->on('khos');
            $table->foreign('chi_tiet_dien_thoai_id')->references('id')->on('chi_tiet_dien_thoais');
        });
        Schema::table('chi_tiet_khuyen_mais', function (Blueprint $table) {
            $table->foreign('khuyen_mai_id')->references('id')->on('khuyen_mais');
            $table->foreign('chi_tiet_dien_thoai_id')->references('id')->on('chi_tiet_dien_thoais');
        });
        Schema::table('nhan_viens', function (Blueprint $table) {
            $table->foreign('chuc_vu_id')->references('id')->on('chuc_vus');
            $table->foreign('quan_ly_id')->references('id')->on('nhan_viens');
            $table->foreign('phong_ban_id')->references('id')->on('phong_bans');
            $table->foreign('tai_khoan_quan_ly_id')->references('id')->on('tai_khoans');
            $table->foreign('tai_khoan_id')->references('id')->on('tai_khoans');
            $table->foreign('cua_hang_id')->references('id')->on('cua_hangs');
        });
        Schema::table('cham_congs', function (Blueprint $table) {
            $table->foreign('nhan_vien_id')->references('id')->on('nhan_viens');
            $table->foreign('nguoi_cham_cong_id')->references('id')->on('nhan_viens');
            $table->foreign('he_so_luong_id')->references('id')->on('he_so_luongs');
            $table->foreign('thuong_id')->references('id')->on('thuongs');
            $table->foreign('phu_cap_id')->references('id')->on('phu_caps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dien_thoais', function (Blueprint $table) {
            //
        });
        Schema::table('chi_tiet_dien_thoais', function (Blueprint $table) {
            //
        });
        Schema::table('hinh_anh_chung_cua_dien_thoais', function (Blueprint $table) {
            //
        });
        Schema::table('hinh_anh_mau_sac_cua_dien_thoais', function (Blueprint $table) {
            //
        });
        Schema::table('tai_khoans', function (Blueprint $table) {
            //
        });
        Schema::table('thong_tin_tai_khoans', function (Blueprint $table) {
            //
        });
        Schema::table('danh_gias', function (Blueprint $table) {
            //
        });
        Schema::table('phan_hoi_danh_gias', function (Blueprint $table) {
            //
        });
        Schema::table('don_hangs', function (Blueprint $table) {
            //
        });
        Schema::table('chi_tiet_don_hangs', function (Blueprint $table) {
            //
        });
        Schema::table('san_pham_phan_bos', function (Blueprint $table) {
            //
        });
        Schema::table('chi_tiet_don_hangs', function (Blueprint $table) {
            //
        });
        Schema::table('khos', function (Blueprint $table) {
            //
        });
        Schema::table('chi_tiet_khos', function (Blueprint $table) {
            //
        });
        Schema::table('chi_tiet_khuyen_mais', function (Blueprint $table) {
            //
        });
        Schema::table('nhan_viens', function (Blueprint $table) {
            //
        });
        Schema::table('cham_congs', function (Blueprint $table) {
            //
        });
    }
}

