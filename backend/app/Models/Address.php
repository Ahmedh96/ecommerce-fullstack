<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\AddressTypeEnum;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'type', 'country', 'city', 'address'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'type' => AddressTypeEnum::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
} 