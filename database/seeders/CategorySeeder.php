<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::factory(10)->create()->each(function ($category) {
            // For each parent category, create 3 subcategories
            Category::factory(3)->make(['category_id'=>$category->id]);
        });
        // $faker = Faker::create();

        // for ($i = 0; $i < 5; $i++) {

        //    $categoryId = DB::table("categories")->insertGetId([
        //         'name' => $faker->word,
        //         'parent_id' => null,
        //         'created_at' => now(),
        //         'updated_at' => now(),


        //     ]);


        //     for ($j = 0; $j < 5; $j++) {

        //         $subcategoryId = DB::table('categories')->insertGetId([

        //             'name' => $faker->word,
        //             'parent_id' => $categoryId,
        //             'created_at' => now(),
        //             'updated_at' => now(),

        //         ]);


        //         for ($k = 0; $k < 5; $k++) { // Assuming you want 5 different tax rates
        //            $TaxId =  DB::table('taxes')->insert([
        //                 'name' => "GST",
        //                 'percentage' => $faker->randomFloat(2, 5, 20), // Random tax percentage between 5% and 20%
        //                 'created_at' => now(),
        //                 'updated_at' => now(),
        //             ]);

        //         for ($l = 0; $l < 5; $l++){
        //             DB::table('products')->insert([
        //                 'name' => $faker->word,
        //                 'category_id' => $categoryId,
        //                 'subcategory_id' => $subcategoryId,
        //                 'price' => $faker->randomFloat(2,10, 100),
        //                 'basic_price' => $faker->randomFloat(2, 5, 800),
        //                 'image' => $faker->imageUrl(),
        //                 'created_at' => now(),
        //                 'updated_at' => now(),
        //                 'tax_id' => $TaxId,

                        
        //             ]);
        //         }
        //         }
        //     }
        // }
    }
}
