<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $casts = [
        'ngay_sinh' => 'datetime:d/m/Y', // Định dạng lại ngày
    ];
}
