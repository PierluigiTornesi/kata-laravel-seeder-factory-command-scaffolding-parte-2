<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = Category::all();

        $rnd_category = $categories->random();
        return [
            'name' => fake()->name(),
            'description' => fake()->realText(),
            'image' => fake()->imageUrl(),
            'isbn' => fake()->ean13(),
            'price' => fake()->randomFloat(2,1,100),
            'featured' => fake()->boolean(),
            'category_id' => $rnd_category->id,
        ];
    }
}
