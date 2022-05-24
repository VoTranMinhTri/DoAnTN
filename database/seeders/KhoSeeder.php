<?php

namespace Database\Seeders;

use App\Models\Kho;
use Illuminate\Database\Seeder;

class KhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kho::create([
            'ten_kho'=> 'Không có',
            'dia_chi'=> 'Không có',
        ]);
        Kho::create([
            'ten_kho'=> 'Kho Lũy Bán Bích',
            'dia_chi'=> '1 Lũy Bán Bích, Tân Thành, Tân Phú, Hồ Chí Minh',
        ]);
    }
}
