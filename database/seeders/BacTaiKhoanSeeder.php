<?php

namespace Database\Seeders;

use App\Models\BacTaiKhoan;
use Illuminate\Database\Seeder;

class BacTaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BacTaiKhoan::create([
            'ten_bac_tai_khoan'=> 'Không xếp bậc',
            'han_muc'=> '0',
            'phan_tram_giam'=> 0,
        ]);
        BacTaiKhoan::create([
            'ten_bac_tai_khoan'=> 'Thành viên',
            'han_muc'=> '0',
            'phan_tram_giam'=> 0.01,
        ]);
        BacTaiKhoan::create([
            'ten_bac_tai_khoan'=> 'Thành viên đồng',
            'han_muc'=> '5000000',
            'phan_tram_giam'=> 0.05,
        ]);
        BacTaiKhoan::create([
            'ten_bac_tai_khoan'=> 'Thành viên bạc',
            'han_muc'=> '10000000',
            'phan_tram_giam'=> 0.1,
        ]);
        BacTaiKhoan::create([
            'ten_bac_tai_khoan'=> 'Thành viên vàng',
            'han_muc'=> '15000000',
            'phan_tram_giam'=> 0.15,
        ]);
    }
}
