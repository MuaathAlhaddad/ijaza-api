<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Admin;
use App\Models\Country;
use App\Models\Mujaz;
use App\Models\User;

class MujazFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mujaz::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'nickname' => $this->faker->word,
            'generation' => $this->faker->word,
            'sex' => $this->faker->randomLetter,
            'birth_date' => $this->faker->date(),
            'death_date' => $this->faker->date(),
            'country_id' => Country::factory(),
            'notes' => $this->faker->text,
            'biography' => $this->faker->text,
            'admin_id' => Admin::factory(),
            'mujeez_id' => User::factory(),
        ];
    }
}
