<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        if (Schema::hasTable('products')) {
            $categories = ['MICRONUTRIENTS', 'BIO-PESTICIDES', 'PESTICIDES']; // Define your categories

            $allProducts = [];

            foreach ($categories as $category) {
                for ($i = 1; $i <= 4; $i++) { // Iterate through col1 to col4
                    $columnName = 'col' . $i;
                    $products = DB::table('products')
                        ->where('status', 1)
                        ->where('category_name', $category)
                        ->where('menu_position', $columnName)
                        ->get();

                    $allProducts[$category][$columnName] = $products;
                }
            }

            view()->share('allProducts', $allProducts);
        }

        view()->composer('*', function ($view) {
            $routeName = Route::currentRouteName();
            $view->with('routeName', $routeName);

            $controllerName = explode('@', str_replace('App\\Http\\Controllers\\Admin\\', '', Route::currentRouteAction()))[0];
            $view->with('controllerName', $controllerName);
        });
    }
}
