<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\CouponTypeEnum;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'discount', 'type', 'expires_at'
    ];

    protected $casts = [
        'discount' => 'float',
        'type' => CouponTypeEnum::class,
    ];
} 