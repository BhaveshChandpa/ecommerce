<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Category::factory(5)->create()->each(function ($category) {
        //     // For each parent category, create 3 subcategories
        //     Category::factory(5)->create(['parent_id'=>$category->id]);
        //                         // ->each(function ($subcategory) use ($category){
        //                         //     Product::factory(5)->create(['category_id'=>$category->id, 'subcategory_id'=>$subcategory->id]);
        //                         // });
        //    Product::factory(5)->create(['category_id'=>$category->id, 'subcategory_id'=>$category->id]);
        // });

        Category::factory()->count(3)->hasSubcategories(3)->create();
    }
}
