<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

 
    public function register(): void
    {
   
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $categories = Category::whereNull('parent_id')
                            ->withWhereHas('subcategories')
                            ->select('id', 'parent_id', 'name')
                            ->get();
            $view->with('categories', $categories);
        });

        // View::composer('*', function ($view) {
        //     $products = Product::all();
        // });

    }
}
