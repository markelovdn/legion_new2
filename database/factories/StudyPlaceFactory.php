<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudyPlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classnum'=>$this->faker->numberBetween(1,11),
            'letter'=>$this->faker->randomLetter(),
            'organization_id'=>Organization::factory(),
        ];
    }
}
