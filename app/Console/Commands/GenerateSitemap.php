<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Product;
use App\Models\Category;
class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for the website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create(route('home'))->setPriority(1.0)->setChangeFrequency('daily'))
            ->add(Url::create(route('about'))->setPriority(0.8)->setChangeFrequency('monthly'))
            ->add(Url::create(route('menu'))->setPriority(0.8)->setChangeFrequency('weekly'))
            ->add(Url::create(route('contact.show'))->setPriority(0.7)->setChangeFrequency('monthly'));

        // ✅ Add dynamic product pages
        $products = Product::all();
        foreach ($products as $product) {
            $sitemap->add(Url::create(route('product.show', $product->slug))->setPriority(0.6)->setChangeFrequency('weekly'));
        }

        // ✅ Add dynamic product pages
        $categories = Category::all();
        foreach ($categories as $category) {
            $sitemap->add(Url::create(route('category.show', $category->slug))->setPriority(0.6)->setChangeFrequency('weekly'));
        }



        // ✅ Save the sitemap file in the public directory
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated successfully!');
    
    }
}
