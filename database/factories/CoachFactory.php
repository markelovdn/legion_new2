<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'secondname' => $this->faker->firstName,
            'patronymic' => $this->faker->firstName,
            'dateofbirth' => $this->faker->date,
            'user_id' => User::factory(),
        ];
    }
}
