<?php

namespace Database\Factories;

use App\Models\BirthCertificate;
use App\Models\Coach;
use App\Models\Country;
use App\Models\District;
use App\Models\Group;
use App\Models\MedicalPolicy;
use App\Models\Organization;
use App\Models\Passport;
use App\Models\Region;
use App\Models\Snils;
use App\Models\StudyPlace;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AthleteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'secondname' => $this->faker->lastName,
            'patronymic' => $this->faker->firstName,
            'dateofbirth' => $this->faker->date,
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'photo' => $this->faker->imageUrl,
            'status' => $this->faker->randomElement(['1', '0']),
            'studyplace_id'=>StudyPlace::factory(),
            'country_id'=>Country::factory(),
            'district_id'=>District::factory(),
            'region_id'=>Region::factory(),
            'passport_id'=>Passport::factory(),
            'birthcertificate_id'=>BirthCertificate::factory(),
            'snils_id'=>Snils::factory(),
            'medicalpolicy_id'=>MedicalPolicy::factory(),
            'user_id'=>User::factory(),
        ];
    }
}
