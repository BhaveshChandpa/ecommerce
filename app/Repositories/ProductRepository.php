<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    protected $model;

    public function __construct(Product $product){

        $this->model = $product;
    }

    public function all(){

        return $this->model->all();
    }


    public function find($product){

        return $this->model->find($product);
    }


    public function create(array $data){

        return $this->model->create($data);
    }


    public function update($product, array $data){

        $products = $this->model->find($product);

        if($products){

            $products->update($data);

            return $products;

        }

        return null;

    }


    public function delete($product){

        $products = $this->model->find($product);

        if($products){
            return $this->model->delete();
        }

        return false;
    }


}

