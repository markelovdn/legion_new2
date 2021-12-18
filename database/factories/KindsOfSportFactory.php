<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KindsOfSportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Тхэквондо', 'Каратэ']),
            'code'=>$this->faker->randomElement(['ASDW4124FD', 'FD123124']),
        ];
    }
}
