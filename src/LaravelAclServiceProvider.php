<?php

namespace Balazsbencs\LaravelAcl;

use Illuminate\Support\ServiceProvider;

class LaravelAclServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {

    }
}