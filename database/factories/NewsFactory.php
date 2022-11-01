<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'author' => $this->faker->numberBetween(1,21),
            'category_id' => $this->faker->numberBetween(1,4),
            'text' => $this->faker->realText()
        ];
    }
}
