<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartStoreRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Variant;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    public function store(CartStoreRequest $request)
    {
            $requestData = $request->validated();

            // if($cart = auth()->user()->cart){
            //     $cart->increment('quantity', 1);

            // dd($requestData);
            $variantId = Variant::where('name', $requestData['variant'])->value('id');

            $cart = Cart::where('variant_id', $variantId)
                ->where('product_id', $requestData['product_id'])
                ->first();

            if($cart){

                $cart->increment('quantity', 1);

            }else{
                Cart::create([
                    'variant_id' => Variant::where('name',$requestData['variant'])->value('id'),
                    'product_id' => $requestData['product_id']
                ]);

            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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


    // public 
}
