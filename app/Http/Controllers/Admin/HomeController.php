<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    //
    public function home(){

        $cachekey = 'categories.all';
        $cacheDuration = 0;


        $categories = Cache::remember($cachekey, $cacheDuration, function(){
            
            return Category::whereNull('parent_id')
                        ->withWhereHas('subcategories')
                        ->select('id', 'parent_id', 'name')
                        ->get();
        });

        
        return view('home.index', ['categories'=>$categories]);
        
    }

    
}
