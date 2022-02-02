<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1,5),
            'image' => 'https://picsum.photos/200',
            'date' => $this->faker->date(),
            'author_id' => rand(1,3),
            'food_name' => $this->faker->sentence(3, false),
            'short_description' => $this->faker->sentence(20, false),
            'full_description' => $this->faker->sentence(100, false)
        ];
    }
}
