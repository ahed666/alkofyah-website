<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Branch;
use App\Models\Product;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // Share the settings data with all views
         View::composer('*', function ($view) {
            // Example settings data (this could come from a database or config)
            $categories = Category::all();
            $contact_info = [
                'email' => setting('site.email'),
                'whatsapp' => setting('site.whatsapp'),
                'facebook' => setting('site.facebook_link'),
                'instagram' => setting('site.instagram_link'),
            ];
            $branches=Branch::all();

            $gallary=Product::inRandomOrder()->limit(6)->get();
            
            // Share settings with the view (including the x-hero component)
            $view->with([
                'categories' => $categories,
                'contact_info' => $contact_info,
                'branches'=>$branches,
                'gallary'=>$gallary,
            ]);
            });
    }
}
