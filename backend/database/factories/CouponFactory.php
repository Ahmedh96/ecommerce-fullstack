<?php

namespace Database\Factories;

use App\Enums\CouponTypeEnum;
use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CouponFactory extends Factory
{
    protected $model = Coupon::class;

    public function definition(): array
    {
        return [
            'code' => strtoupper(Str::random(8)),
            'discount' => $this->faker->randomFloat(2, 5, 100),
            'type' => fake()->randomElement(CouponTypeEnum::cases())->value,
            'expires_at' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
} 