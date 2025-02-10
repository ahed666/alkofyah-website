<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Offer;
use App\Models\Branch;
use App\Models\Slider;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    public function index(){
        $newestProducts=Product::where('new',true)->where('available',true)->limit(4)->get();
        $offers=Offer::where('expiry',true)->limit(4)->get();
        $branches=Branch::all();
        $sliders=Slider::all();
        $services=config('data.services_section');
        return view('home',compact('newestProducts','offers','branches','services','sliders'));
    }

    public function changeLocale($locale){
        if (in_array($locale, ['en', 'ar'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }
        return redirect()->back();
    }
}
