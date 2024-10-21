<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Supplier;
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
            'product_name' => $this->faker->word . ' ' . $this->faker->randomElement(['Chair', 'Table', 'Bed', 'Sofa']),
            'category_id' => Category::inRandomOrder()->first()->id,  // Assign to random category
            'price' => $this->faker->randomFloat(2, 50, 2000),       // Random price between 50 and 2000
            'description' => $this->faker->sentence,
            'dimensions' => $this->faker->randomNumber(2) . 'x' . $this->faker->randomNumber(2) . 'x' . $this->faker->randomNumber(2) . ' cm',
            'weight' => $this->faker->randomFloat(2, 5, 100),        // Random weight between 5 and 100 kg
            'material' => $this->faker->randomElement(['Wood', 'Metal', 'Plastic', 'Leather']),
            'stock_quantity' => $this->faker->numberBetween(0, 100), // Random stock quantity
            'supplier_id' => Supplier::inRandomOrder()->first()->id, // Assign to random supplier
        ];
    }
}
