<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TqtitleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->randomElement(['1 гып','2 гып', '3 гып'])
        ];
    }
}
