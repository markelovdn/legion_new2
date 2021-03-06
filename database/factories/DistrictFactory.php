<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fulltitle' => $this->faker->city,
            'shorttitle' => $this->faker->citySuffix,
        ];
    }
}
