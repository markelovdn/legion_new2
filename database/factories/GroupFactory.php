<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\KindsOfSport;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Группа 1', 'Группа 2', 'Группа 3']),
            'departments_id'=>Department::factory(),
            'kindsofsports_id'=>KindsOfSport::factory(),

        ];
    }
}
