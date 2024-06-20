<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

   

    public function product(){

        return view('product.index');
    }

    public function productDetail($slug){

        
        $products = Product::where('slug', $slug)->firstOrFail();
        return view('product.show', compact('products'));
    }
}
