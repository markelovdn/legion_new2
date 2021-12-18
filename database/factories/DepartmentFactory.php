<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fulltitle' => $this->faker->title,
            'shorttitle' => $this->faker->title,
            'address' => $this->faker->address,
            'organization_id' => Organization::factory(),
        ];
    }
}
