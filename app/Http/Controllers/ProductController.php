<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function productDetails($slug){

        $product=Product::where('slug',$slug)->with('category')->first();
        $relatedProducts = Product::where('cat_id', $product->cat_id)
        ->where('id', '!=', $product->id) 
        ->limit(4) 
        ->get();
    
        return view('product',compact('product','relatedProducts'));
    }
}
