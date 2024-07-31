<?php
namespace App\Repositories;

interface ProductRepositoryInterface{



    public function all();

    public function find($product);

    public function create(array $data);


    public function update($product, array $data);

    public function delete($product);

}






?>
