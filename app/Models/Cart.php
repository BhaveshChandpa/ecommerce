<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected static function booted()
    {
        // static::addGlobalScope('delete', function (Builder $builder) {
        //     $builder->where('user_id', auth()->id());
        // });
    }

    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'variant_id'
    ];



    public function user(){

        return $this->belongsTo(User::class);
    }


    public function product(){

        return $this->belongsTo(Product::class);
    }



    public function variant(){

        return $this->belongsTo(Variant::class);
    }



}
