<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    
    public function __construct(protected ProductRepositoryInterface $productRepository){}

    public function home()
    {
        return view('home.index', ['products' =>  $this->productRepository->all()]);
    }
}
