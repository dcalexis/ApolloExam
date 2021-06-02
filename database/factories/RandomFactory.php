<?php

namespace Database\Factories;

use App\Models\Random;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RandomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Random::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'values' => $this->faker->name(),
			'flag' => rand(0, 1)
        ];
    }
}
