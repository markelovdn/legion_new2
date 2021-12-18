<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BirthCertificateFactory extends Factory
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
            'dateissue'=> $this->faker->date(),
            'issuedby'=>$this->faker->date(),
            'scanlink'=>$this->faker->imageUrl,
        ];
    }
}
