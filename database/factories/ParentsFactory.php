<?php

namespace Database\Factories;
use App\Models\Passport;
use App\Models\Snils;
use App\Models\User;
use App\Models\WorkPlace;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParentsFactory extends Factory
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
            'workplace_id' => WorkPlace::factory(),
            'passport_id' => Passport::factory(),
            'snils_id' => Snils::factory(),
            'user_id' => User::factory(),
        ];
    }
}
