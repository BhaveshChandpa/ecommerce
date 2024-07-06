<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    //

    public function index()
    {

        $categories = Category::all();
        $category = Category::with('category', 'subcategories')->first();

        // $product = Product::all();
        // $product = Product::with('variants')->get();

        return view('category.index', ['category' => $category,  'categories' => $categories]);
    }
}
