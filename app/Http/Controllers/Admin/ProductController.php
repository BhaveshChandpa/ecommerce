<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository){

        $this->productRepository = $productRepository;
    }
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productRepository->all();

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
    public function show($slug, $variant)
    {
        // using wherehas
        // $product = Product::where('slug', $slug)->whereHas("variants", function($v) use ($variant){
        //     $v->where('name', $variant);
        // })
        // ->with('variants', 'category')->firstOrFail();

        $product = Product::where('slug', $slug)->whereRelation('variants', 'name', $variant)
            ->with(['variants', 'category'])->firstOrFail();
        // dd($product);
        // $products = Product::with(['variants', 'category'])->get();

        // $categoryName = $product->category->name;

        dd($product);
        return view('product.show', [
            // 'products' => $products,
            'product' => $product,
            // 'categoryName' => $categoryName,
            'variant' => $variant,
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
