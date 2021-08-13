<?php

namespace Database\Factories;

use App\Models\Hole;
use Illuminate\Database\Eloquent\Factories\Factory;

class HoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hole::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hole_number' => $this->faker->randomDigitNotNull,
        'tee_id' => $this->faker->randomDigitNotNull,
        'par' => $this->faker->randomDigitNotNull,
        'hole_raiting' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
