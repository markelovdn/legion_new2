<?php

namespace Database\Factories;

use App\Models\Age;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->randomElement([
                '54 кг', '58 кг', '63 кг','68 кг','74 кг','80 кг','87 кг','св. 87 кг',
                '46 кг','49 кг','53 кг','57 кг','62 кг','67 кг','73 кг','св. 73 кг'
            ]),
            'gender'=>$this->faker->randomElement(['male','female']),
            'age_id'=>Age::factory()
        ];
    }
}
