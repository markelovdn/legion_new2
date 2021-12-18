<?php

namespace Database\Factories;

use App\Models\Athlete;
use Illuminate\Database\Eloquent\Factories\Factory;

class InsuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'series' => $this->faker->randomNumber(),
            'number' => $this->faker->randomNumber(),
            'validuntil' => $this->faker->date,
            'athlete_id' => Athlete::factory(),
            'scanlink' => $this->faker->imageUrl,
        ];
    }
}
