<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
    
        if (Schema::hasTable('categories')){
            view()->share('categories', Category::all());
        }

        Paginator::useBootstrap();
    }
}
