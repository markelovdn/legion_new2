<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['8-9 лет', '10-11 лет', '12-14 лет']),
            'yearbegin' => $this->faker->year,
            'yearfinish' => $this->faker->year,
        ];
    }
}
