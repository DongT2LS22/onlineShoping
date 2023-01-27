<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' =>$this->faker->name(),
            'price' =>$this->faker->numberBetween(1,1000),
            'discount' =>$this->faker->numberBetween(0,100),
            'summary' =>$this->faker->sentence(),
            'quantity' =>$this->faker->numberBetween(0,100)
        ];
    }
}
