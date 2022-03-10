<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Ijaza;
use App\Models\User;

class IjazaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ijaza::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mujaz_id' => User::factory(),
            'mujeez_id' => User::factory(),
            'document' => $this->faker->word,
            'location' => $this->faker->text,
        ];
    }
}
