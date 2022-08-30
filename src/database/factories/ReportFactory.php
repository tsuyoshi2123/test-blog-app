<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\ja_JP\Restaurant($faker));

        return [
            'name' => $this->faker->name(),
            'food' => $faker->foodName(),
            'comment' => $this->faker->realText(30),
            'time' => now()->format('Y-m-d'),
        ];
    }
}
