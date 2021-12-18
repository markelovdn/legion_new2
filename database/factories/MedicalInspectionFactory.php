<?php

namespace Database\Factories;

use App\Models\Athlete;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalInspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'dateinsp'=>$this->faker->date,
          'note'=>$this->faker->text,
          'athlete_id'=>Athlete::factory(),
          'organization_id'=>Organization::factory(),
        ];
    }
}
