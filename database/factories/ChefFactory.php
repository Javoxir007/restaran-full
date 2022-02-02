<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => 'https://picsum.photos/200',
            'name' => $this->faker->name(),
            'job' => $this->faker->jobTitle() 
        ];
    }
}
