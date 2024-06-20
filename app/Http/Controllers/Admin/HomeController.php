<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function home(){

        // $cachekey = 'categories.all';
        // $cacheDuration = 0;


        // $categories = Cache::remember($cachekey, $cacheDuration, function(){
            
        //     return Category::whereNull('parent_id')
        //                 ->withWhereHas('subcategories')
        //                 ->select('id', 'parent_id', 'name')
        //                 ->get();

       



        // });

        $products = Product::with(['category', 'tax'])->select('name', 'price', 'image', 'slug')->get();




        
        return view('home.index', ['products'=> $products]);
        
    }

    
}
