<?php

namespace Database\Factories;

use App\Models\UserScore;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserScoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserScore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player_id' => $this->faker->word,
        'hole_raiting_type' => $this->faker->word,
        'hole_raitinig' => $this->faker->word,
        'date_hole_raiting' => $this->faker->word,
        'handicap_index' => $this->faker->word,
        'date_handicap_index' => $this->faker->word,
        'ghin' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
