<?php

namespace Database\Factories;

use App\Models\Athlete;
use App\Models\Coach;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class DecreeFactory extends Factory
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
            'num' => $this->faker->randomNumber(),
            'dateissue'=> $this->faker->date(),
            'title'=>$this->faker->title(),
            'scanlink'=>$this->faker->imageUrl(),
            'organization_id'=>Organization::factory(),
            'athlete_id'=>Athlete::factory(),
            'coach_id'=>Coach::factory(),
        ];
    }
}
