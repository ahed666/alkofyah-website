<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    
    protected $table="categories";



    public function products()
    {
        return $this->hasMany(Product::class,'cat_id');
    }
}
