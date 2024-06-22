<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Tax;

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

        $name = $this->faker->name;
        return [

            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'basic_price' => $this->faker->randomFloat(2, 10, 100),
            'image' => $this->faker->imageUrl(),
            // 'image' => $this->faker->image('public/storage/',640,480, null, false),
            'tax_id' => Tax::inRandomOrder()->first()

        ];
    }
}
