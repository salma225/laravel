<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        
    }
    public function boot()
    {
        Builder::defaultStringLength(191);
    }
}
