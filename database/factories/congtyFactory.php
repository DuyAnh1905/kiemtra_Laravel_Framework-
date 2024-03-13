<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class congtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'TenHang'=> $this->faker->name(),
            'DonViTinh' => $this->faker->randomElement(['mm', 'kg', 'm', 'g']),
            'Soluong'=> $this->faker->randomfloat(),
            'GiaNhap'=> $this->faker->randomfloat(),
            'GiaBan'=> $this->faker->randomfloat(),
        ];

    }
}
