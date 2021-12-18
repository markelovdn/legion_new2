<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SportsCategoriesTitleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fulltitle'=>$this->faker->unique->randomElement(['1 юношеский','2 юношеский', '3 юношеский']),
            'shorttitle'=>$this->faker->unique->randomElement(['1 юн','2 юн', '3 юн'])
        ];
    }
}
