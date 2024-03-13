<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class quanHangHoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'TenDanhMuc'=> $this->faker->name(),
            'DanhMucThietYeu'=> true,
            'hang_id'=> random_int(1,10),
            
        ];
    }
}
