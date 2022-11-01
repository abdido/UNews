<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
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
            'detail' => $this->faker->realText(),
            'user_id' => $this->faker->numberBetween(1,20),
            'notification_category_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
