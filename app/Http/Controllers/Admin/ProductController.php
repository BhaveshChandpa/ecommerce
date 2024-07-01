<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
    public function show($slug, Request $request)
    {
        $product = Product::where('slug', $slug)->with('variants')->firstOrFail();
        $products = Product::with(['variants', 'category'])->get();

        $categoryName = $product->category->name;
        $size = $request->query('size', null);
     
        // $selectSize = $request->query('size', null);

        // $size = $product->variants->name;

        return view('product.show', [
            'products' => $products,
            'product' => $product,
            'categoryName' => $categoryName,
            'size' => $size
        ]);

    }


    // public function selectSize(Request $request, Product $product){

    //     $selectSize = $request->input('size');
    //     return redirect()->route('product.show', ['product' => $product->slug, 'size' => $selectSize]);
    // }

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
