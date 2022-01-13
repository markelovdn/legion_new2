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
            'fulltitle' => $this->faker->randomElement(['МОУ СШ№54', 'ЦСКА, 35-я Гвардейская']),
            'shorttitle' => $this->faker->randomElement(['СШ№54', '35-я Гвардейская']),
            'address' => $this->faker->address,
            'organization_id' => Organization::factory(),
        ];
    }
}
