<?php

namespace Database\Seeders;

use App\Models\ThongTinTaiKhoan;
use Illuminate\Database\Seeder;

class ThongTinTaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThongTinTaiKhoan::create([
            'tai_khoan_id'=> 1,
            'ho_ten'=> 'Võ Trần Minh Trí',
            'dia_chi'=> '118 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
            'so_dien_thoai'=> '0123456789',
            'email'=> 'admin@gmail.com',
            'ngay_sinh'=> '2001-1-1',
            'gioi_tinh'=> 1,
        ]);
        ThongTinTaiKhoan::create([
            'tai_khoan_id'=> 2,
            'ho_ten'=> 'Trương Văn Phú',
            'dia_chi'=> '11 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
            'so_dien_thoai'=> '0123456780',
            'email'=> 'quanlycuahang1@gmail.com',
            'ngay_sinh'=> '1995-1-1',
            'gioi_tinh'=> 1,
        ]);
        ThongTinTaiKhoan::create([
            'tai_khoan_id'=> 3,
            'ho_ten'=> 'Lê Nhật Minh',
            'dia_chi'=> '18 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
            'so_dien_thoai'=> '0123456781',
            'email'=> 'quanlykho1@gmail.com',
            'ngay_sinh'=> '1996-1-1',
            'gioi_tinh'=> 1,
        ]);
        ThongTinTaiKhoan::create([
            'tai_khoan_id'=> 4,
            'ho_ten'=> 'Hoàng Phương Phi',
            'dia_chi'=> '28 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
            'so_dien_thoai'=> '0123456729',
            'email'=> 'nhanviencuahang1@gmail.com',
            'ngay_sinh'=> '1997-1-1',
            'gioi_tinh'=> 1,
        ]);

        ThongTinTaiKhoan::create([
            'tai_khoan_id'=> 5,
            'ho_ten'=> 'Hoàng Phương Ly',
            'dia_chi'=> '28 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
            'so_dien_thoai'=> '0123456722',
            'email'=> 'nhanviencuahang2@gmail.com',
            'ngay_sinh'=> '1997-1-1',
            'gioi_tinh'=> 0,
        ]);

        ThongTinTaiKhoan::create([
            'tai_khoan_id'=> 6,
            'ho_ten'=> 'Lương Lư Vương',
            'dia_chi'=> '29 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
            'so_dien_thoai'=> '0123456702',
            'email'=> 'nhanviencuahang2@gmail.com',
            'ngay_sinh'=> '1997-1-1',
            'gioi_tinh'=> 1,
        ]);

        ThongTinTaiKhoan::create([
            'tai_khoan_id'=> 7,
            'ho_ten'=> 'Lương Lư Hà',
            'dia_chi'=> '29 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
            'so_dien_thoai'=> '0123456712',
            'email'=> 'nhanviencuahang2@gmail.com',
            'ngay_sinh'=> '1997-1-1',
            'gioi_tinh'=> 0,
        ]);

        ThongTinTaiKhoan::create([
            'tai_khoan_id'=> 8,
            'ho_ten'=> 'Nguyễn Văn Khách Hàng',
            'dia_chi'=> '119 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
            'so_dien_thoai'=> '0123456783',
            'email'=> 'khachhang@gmail.com',
            'ngay_sinh'=> '2001-1-2',
            'gioi_tinh'=> 1,
        ]);
    }
}
