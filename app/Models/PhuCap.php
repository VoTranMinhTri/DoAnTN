<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuCap extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'ma_phu_cap';
    protected $keyType = 'string';
}
