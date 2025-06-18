<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(10)->create();
        Post::factory(150)->create()->each(
            function( Post $post){
                Image::factory()->create([
                    'imageable_id' => $post->id,
                    'imageable_type' => Post::class
                ]);
            }
        );
        Product::factory(100)->create()->each(
            function( Product $product){
                Image::factory(4)->create([
                    'imageable_id' => $product->id,
                    'imageable_type' => Product::class
                ]);
            }
        );

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
