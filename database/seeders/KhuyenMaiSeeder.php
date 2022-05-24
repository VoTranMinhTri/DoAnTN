<?php

namespace Database\Seeders;

use App\Models\KhuyenMai;
use Illuminate\Database\Seeder;

class KhuyenMaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KhuyenMai::create([
            'ten_khuyen_mai'=> 'Khuyến mãi 2022',
            'ngay_bat_dau'=> '2022-01-01',
            'ngay_ket_thuc'=> '2022-12-01',
        ]);
    }
}
