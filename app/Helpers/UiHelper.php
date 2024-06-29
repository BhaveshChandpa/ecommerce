<?php

namespace App\Helpers;

use App\Models\Product;

class UiHelper
{
    public static function fetchSingleProduct()
    {

        return Product::select('id', 'name', 'image', 'price', 'basic_price')->first();
    }

    public static function fetchMultipleProduct()
    {

    }
}
