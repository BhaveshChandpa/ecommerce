<?php
namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

interface ProductRepositoryInterface{



    public function all();

    public function find(Product $product);

    public function create(array $data);

    public function update(Product $product, array $data);

    public function delete(Product $product);

}






?>
