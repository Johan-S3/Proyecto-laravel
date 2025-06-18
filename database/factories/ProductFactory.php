<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Image;
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
    public function definition(): array
    {
        return [
            'name'=> fake()-> name(20),
            'price'=> random_int(1000, 100000),
            'stock'=> random_int(1, 100),
            'category_id' => Category::all()->random()->id,
            // 'image_id' =>  Image::factory()->create()->id, 
        ];
    }
}
