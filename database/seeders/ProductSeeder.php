<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variants = Variant::get();
         Category::IsSubcategories()->get()->each(
            function ($subcategory) use($variants) {
                Product::factory()
                ->count(5)
                ->hasAttached($variants)
                ->create(
                    [
                        'category_id' => $subcategory->id,
                        'subcategory_id' => $subcategory->parent_id
                    ]
                );
            }
        );
    }
}
