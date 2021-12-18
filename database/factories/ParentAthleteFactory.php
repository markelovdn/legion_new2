<?php

namespace Database\Factories;

use App\Models\Athlete;
use App\Models\Organization;
use App\Models\Passport;
use App\Models\Snils;
use App\Models\User;
use App\Models\WorkPlace;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParentAthleteFactory extends Factory
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
//            'status' => $this->faker->words(['main','secondary']),
            'athlete_id' => Athlete::factory(),
            'work_place_id' => WorkPlace::factory(),
            'passport_id' => Passport::factory(),
            'snils_id' => Snils::factory(),
            'user_id' => User::factory(),
        ];
    }
}
