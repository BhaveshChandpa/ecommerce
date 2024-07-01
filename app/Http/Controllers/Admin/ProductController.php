<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug,  $size = null)
    {
        // dd($product);
       
        // $product->load('variants:name,id');
        // $product = Product::select('id', 'name', 'image')->first();
        // $product =  UiHelper::FetchSingleProduct();
        // $category = Category::with('products')->get();
        $product = Product::where('slug', $slug)->with('variants')->firstOrFail();
        $products = Product::with(['variants', 'category'])->get();

        // if (!$product->variants->isEmpty()) {
        //     throw new NotFoundHttpException();
        // }
        $categoryName = $product->category->name;

        if ($size) {
            // Check if the product has variants
            if ($product->variants->isEmpty()) {
                throw new NotFoundHttpException('Product variants not found.');
            }
    
            // Check if the variant exists
            $variantExists = $product->variants->contains('name', $size);
    
            // Log the variants for debugging
            \Log::info('Product variants:', $product->variants->pluck('name')->toArray());
    
            if (!$variantExists) {
                throw new NotFoundHttpException('Variant with size '.$size.' not found for this product.');
            }
        }
        // $size = 
        // dd($products->varinats);
        
        // dd($product);

        return view('product.show', [
            'products' => $products,
            'product' => $product,
            'categoryName' => $categoryName,
            'size' => $size
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
