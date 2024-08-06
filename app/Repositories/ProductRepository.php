<?php

namespace App\Repositories;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Database\Eloquent\Model;

class ProductRepository implements ProductRepositoryInterface{


    public function all():JsonResource
    {
        return ProductResource::collection(Product::all());
    }


    public function find(Product $product):JsonResource
    {
        return new ProductResource($product);
    }


    public function create(array $data):Model
    {
        return Product::create($data);
    }


    public function update(Product $product, array $data){

        abort_if(!$product,'Product Not found');
        return $product->update($data);
    }


    public function delete(Product $product){

        abort_if(!$product,'Product Not found');
        
        return $product->delete();
    }


}

