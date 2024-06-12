<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function home(){
        return view('home.index');
    }

    public function product(){

        return view('product.index');
    }
}
