<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\OrderStatusEnum;
use App\Enums\PaymentMethodEnum;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'status' => fake()->randomElement(OrderStatusEnum::cases())->value,
            'total' => $this->faker->randomFloat(2, 50, 5000),
            'payment_method' => fake()->randomElement(PaymentMethodEnum::cases())->value,
        ];
    }
} 