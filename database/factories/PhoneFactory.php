<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone>
 */
class PhoneFactory extends Factory
{
    public function definition(): array
    {
        return [
            'phone_brand' => $this->faker->randomElement(['Apple', 'Samsung', 'Xiaomi', 'Huawei']),
            'phone_model' => $this->faker->bothify('??###'),
            'phone_price' => $this->faker->randomFloat(2, 100, 2000),
            'phone_display_size' => $this->faker->numberBetween(5, 7),
            'phone_is_smartphone' => $this->faker->boolean(),
        ];
    }
}
