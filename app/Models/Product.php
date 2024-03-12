<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function shopping()
    {
        return $this->belongsToMany(Buy::class, 'products_shoppings', 'buy_id', 'product_id');
    }
}
