<?php

namespace Database\Seeders;

use App\Models\DonHang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //2023
        DonHang::create([
            'ma_don_hang' => 'DHAABBCC20230101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2023-1-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2023-1-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHAABBCC20230201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2023-2-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2023-2-1'
        ]);
        //2022
        DonHang::create([
            'ma_don_hang' => 'DHAABBCC20220101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2022-1-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2022-1-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHCCDDEE20220201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2022-2-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2022-2-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHQQWWEE20220301',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2022-3-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2022-3-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHRRTTYY20220401',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2022-4-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2022-4-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHPPOOII20220501',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2022-5-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2022-5-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHHHJJKK20220601',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2022-6-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2022-6-1'
        ]);
        //2021
        DonHang::create([
            'ma_don_hang' => 'DHAABBCC20210101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-1-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-1-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHCCDDEE20210201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-2-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-2-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHQQWWEE20210301',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-3-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-3-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHRRTTYY20210401',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-4-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-4-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHPPOOII20210501',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-5-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-5-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHHHJJKK20210601',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-6-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-6-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHZZJJKK20210701',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-7-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-7-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHKK20210801',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-8-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-8-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20210901',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-9-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-9-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20211001',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-10-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-10-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20211101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-11-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-11-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20211201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2021-12-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2021-12-1'
        ]);
        //2020
        DonHang::create([
            'ma_don_hang' => 'DHAABBCC20200101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-1-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-1-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHCCDDEE20200201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-2-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-2-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHQQWWEE20200301',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-3-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-3-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHRRTTYY20200401',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-4-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-4-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHPPOOII20200501',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-5-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-5-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHHHJJKK20200601',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-6-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-6-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHZZJJKK20200701',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-7-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-7-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHKK20200801',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-8-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-8-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20200901',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-9-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-9-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20201001',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-10-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-10-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20201101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-11-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-11-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20201201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2020-12-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2020-12-1'
        ]);
        //2019
        DonHang::create([
            'ma_don_hang' => 'DHAABBCC20190101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-1-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-1-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHCCDDEE20190201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-2-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-2-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHQQWWEE20190301',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-3-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-3-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHRRTTYY20190401',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-4-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-4-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHPPOOII20190501',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-5-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-5-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHHHJJKK20190601',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-6-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-6-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHZZJJKK20190701',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-7-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-7-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHKK20190801',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-8-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-8-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20190901',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-9-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-9-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20191001',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-10-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-10-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20191101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-11-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-11-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20191201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2019-12-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2019-12-1'
        ]);
        //2018
        DonHang::create([
            'ma_don_hang' => 'DHAABBCC20180101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-1-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-1-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHCCDDEE20180201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-2-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-2-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHQQWWEE20180301',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-3-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-3-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHRRTTYY20180401',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-4-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-4-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHPPOOII20180501',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-5-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-5-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHHHJJKK20180601',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-6-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-6-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHZZJJKK20180701',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-7-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-7-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHKK20180801',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-8-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-8-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20180901',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-9-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-9-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20181001',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-10-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-10-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20181101',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-11-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-11-1'
        ]);
        DonHang::create([
            'ma_don_hang' => 'DHLLHHMM20181201',
            'tai_khoan_khach_hang_id' => 8,
            'tai_khoan_nhan_vien_id' => 1,
            'phieu_giam_gia_id' => null,
            'cua_hang_id' => 1,
            'ho_ten_nguoi_nhan' => 'Nguyễn Văn A',
            'dia_chi_nhan_hang' => '123 Lũy Bán Bích',
            'so_dien_thoai_nguoi_nhan' => '0918123456',
            'ghi_chu' => '',
            'phuong_thuc_nhan_hang' => 1,
            'phuong_thuc_thanh_toan' => 1,
            'ngay_giao' => '2018-12-2',
            'trang_thai_thanh_toan' => 1,
            'trang_thai_don_hang' => 3,
            'ngay_tao' => '2018-12-1'
        ]);
    }
}
