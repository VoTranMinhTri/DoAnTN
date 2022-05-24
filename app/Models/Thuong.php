<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thuong extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'ma_thuong';
    protected $keyType = 'string';
}
