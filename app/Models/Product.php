<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Variant;

class Product extends Model
{
    use HasFactory;

    protected  $fillable = [
        
        'name',
        'slug', 
        'category_id', 
        'subcategory_id', 
        'price', 
        'basic_price', 
        'image', 
        'tax_id'
    ];

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function tax(){
        return $this->belongsTo(Tax::class);

    }


    public function variant(){

        return $this->belongsToMany(Variant::class);
    }


         






}



