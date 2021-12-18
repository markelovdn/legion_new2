<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompetitionsResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sertificatenum' => $this->faker->randomNumber(),
            'athlete_id' => Athlete::factory(),
            'tqtitle_id' => Tqtitle::factory(),
        ];
    }
}
