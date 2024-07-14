<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
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

        // Model::preventLazyLoading(! $this->app->isProduction());

    }
}
