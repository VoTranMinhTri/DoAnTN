<?php

namespace Database\Seeders;

use App\Models\CuaHang;
use Illuminate\Database\Seeder;

class CuaHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CuaHang::create([
            'ten_cua_hang'=> 'Không có',
            'dia_chi'=> 'Không có',
        ]);
        CuaHang::create([
            'ten_cua_hang'=> 'Cửa hàng Lũy Bán Bích',
            'dia_chi'=> '2 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
        ]);
    }
}
