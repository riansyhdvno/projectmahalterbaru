<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

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
        // Share categories to all views that use layout.blade.php
        View::composer('components.category', function ($view) {
            $categories = Category::all(); // Ambil semua kategori dari database
            $view->with('categories', $categories);
        });
    }
}
