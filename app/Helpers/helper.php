<?php

namespace App\Helpers;
use App\Models\Product;


// if (!function_exists('FetchSingleProduct')){

//     function FetchSingleProduct(){
//         return Product::select('id', 'name', 'image')->first();
//     }
// }

// if (!function_exists('FetchAllProduct')){

//     function FetchAllProduct(){
//         return Product::select('id', 'name', 'image')->first();
//     }
// }

class helper{

    public static function FetchSingleProduct(){

        return Product::select('id', 'name', 'image', 'price', 'basic_price')->first();
        // return  Product::where('slug', $slug)->with('variants')->firstOrFail();


    }

    public static function FetchMultipleProduct(){
        
    }


}


?>