<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    // una compra tiene varios productos
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
