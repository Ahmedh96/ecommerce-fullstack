<?php

namespace Database\Factories;

use App\Enums\AddressTypeEnum;
use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'type' => fake()->randomElement(AddressTypeEnum::cases())->value,
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
        ];
    }
} 