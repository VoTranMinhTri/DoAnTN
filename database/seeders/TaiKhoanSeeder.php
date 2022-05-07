<?php

namespace Database\Seeders;

use App\Models\TaiKhoan;
use Illuminate\Database\Seeder;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaiKhoan::create([
            'loai_tai_khoan_id'=> 1,
            'bac_tai_khoan_id'=> 1,
            'username'=> 'Admin',
            'password'=> bcrypt('admin123'),
            'diem_thuong'=> 0,
            'token'=> 'SL3mVvdrt9gkYspJ8gqWbXv2pcEEyb2ruodaYHd3xjxSZMjlg563MwvzPiin',
            'trang_thai'=> 1,
        ]);
    }
}
