<?php

namespace App\Providers;
<<<<<<< HEAD
=======
use Illuminate\Pagination\Paginator;
>>>>>>> origin/master

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
<<<<<<< HEAD
        
        //
=======
        //
        Paginator::useBootstrap();



>>>>>>> origin/master
    }
}
