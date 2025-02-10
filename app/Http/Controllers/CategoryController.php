<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function productByCategory($slug){

        $category=Category::where('slug',$slug)->with('products')->first();
       
        return view('products',compact('category'));
    }
}
