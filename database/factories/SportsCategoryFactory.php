<?php

namespace Database\Factories;

use App\Models\Athlete;
use App\Models\SportsCategoriesTitle;
use Illuminate\Database\Eloquent\Factories\Factory;

class SportsCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dateassigment'=>$this->faker->date,
            'sportcattitle_id'=>SportsCategoriesTitle::factory(),
            'athlete_id'=>Athlete::factory(),
        ];
    }
}
