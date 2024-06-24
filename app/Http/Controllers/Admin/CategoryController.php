<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index(){

        $category = Category::with('category', 'subcategories')->first();
        // $product = Product::all();
        $product = Product::with('variants')->get();

        return view('category.index', ['category' => $category, 'product' => $product]);
    }
}
