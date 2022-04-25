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
            'product_name' => $this->faker->text($maxNbChars = 8),
            'description' => $this->faker->text(),
            'unit_price' => $this->faker->numerify("###.##"),
            'barcode' => $this->faker->numerify("########"),
            'supplier_id' => $this->faker->numberBetween(1, 7),
            'user_id' => $this->faker->numberBetween(1, 6),
        ];
    }
}
