<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    // Các cột có thể gán giá trị hàng loạt
    protected $fillable = [
        'coupon_name', 
        'coupon_discount', 
        'coupon_validity', 
        'status',
    ];
}


