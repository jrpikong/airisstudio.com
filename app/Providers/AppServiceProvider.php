<?php

namespace App\Providers;

use App\CategoryCatalog;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category = CategoryCatalog::where('status','=',1)->get();
        view()->share('categoryCatalog', $category);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
