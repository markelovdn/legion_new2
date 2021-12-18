<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalPolicyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num' => $this->faker->randomNumber(),
            'scanlink'=>$this->faker->imageUrl,
        ];
    }
}
