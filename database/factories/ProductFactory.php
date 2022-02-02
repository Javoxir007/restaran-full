<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {        
        return [
            'name' => $this->faker->sentence(3, false),
            'category_id' => rand(1,5),
            'price' => rand(40,99),
            'old_price' => rand(100,199),
            'image' => 'https://picsum.photos/200',
            'discount' => rand(5,30),
            'on_stock' => rand(0,100),
            'description' => $this->faker->sentence(20, false)
        ];
    }
}
