<?php

namespace Lifespikes\Backend;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class BackendAppProvider extends ServiceProvider
{
    public function register()
    {
        /**
         * Configs, migrations, etc.
         */
    }

    public function boot()
    {
        Route::get('/', function () {
            return Inertia::render('Home');
        });
    }
}
