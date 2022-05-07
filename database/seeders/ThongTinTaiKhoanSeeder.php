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
            'ho_ten'=> 'Nguyễn Văn Admin',
            'dia_chi'=> '118 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
            'so_dien_thoai'=> '0123456789',
            'ngay_sinh'=> '2001-1-1',
            'gioi_tinh'=> 0,
        ]);
    }
}
