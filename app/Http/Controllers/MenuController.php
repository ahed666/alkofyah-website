<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class MenuController extends Controller
{
    public function index(){
        $categories=Category::with('products')->get();
        return view('menu',compact('categories'));
    }
}
