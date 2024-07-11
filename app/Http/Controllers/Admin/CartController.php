<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function index(Request $request)
    {




        return view('cart.cart');
    }


    public function add(Request $request){


        $product = Product::findOrFail($request->product_id);

        $cart = Cart::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_id' => $product->id,
            ],
            [
                'quantity' => $request->quantity,
            ]
        );

        return view('cart.cart');


    }
}
