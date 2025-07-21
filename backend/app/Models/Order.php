<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\OrderStatusEnum;
use App\Enums\PaymentMethodEnum;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'status', 'total', 'payment_method'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'total' => 'float',
        'status' => OrderStatusEnum::class,
        'payment_method' => PaymentMethodEnum::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
} 