<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){

        $category = Category::whereNull('parent_id')->with('children')->get();
        return view('home.index', compact('category'));
    }

    
}
