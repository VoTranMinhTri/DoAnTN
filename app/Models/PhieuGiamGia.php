<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuGiamGia extends Model
{
    use HasFactory;
    protected $casts = [
        'ngay_bat_dau' => 'datetime:d/m/Y', // Định dạng lại ngày
        'ngay_het_han' => 'datetime:d/m/Y',
    ];
}
