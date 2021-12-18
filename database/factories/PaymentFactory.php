<?php

namespace Database\Factories;

use App\Models\PaymentsTitle;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date,
            'sum' => $this->faker->randomNumber(),
            'year' => $this->faker->year,
            'paymenttitle_id'=>PaymentsTitle::factory()
        ];
    }
}
