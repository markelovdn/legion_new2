<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\District;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'datebegin'=>$this->faker->date,
          'datefinish'=>$this->faker->date,
          'title'=> $this->faker->title,
          'address'=> $this->faker->address,
          'linkreport'=>$this->faker->imageUrl,
          'status'=>$this->faker->randomElement(['1','2']),
          'country_id'=>Country::factory(),
          'district_id'=>District::factory(),
          'region_id'=>Region::factory(),
        ];
    }
}
