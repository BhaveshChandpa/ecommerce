<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    //
    public function home(Request $request)
    {

        // $cachekey = 'categories.all';
        // $cacheDuration = 0;

        // $categories = Cache::remember($cachekey, $cacheDuration, function(){

        //     return Category::whereNull('parent_id')
        //                 ->withWhereHas('subcategories')
        //                 ->select('id', 'parent_id', 'name')
        //                 ->get();

        // });

        $products = Product::with(['variants:id,name'])->select('id', 'name', 'price', 'image', 'slug')->take(5)->get();

        return view('home.index', ['products' => $products]);
        // dd($request->all());

    }
}
