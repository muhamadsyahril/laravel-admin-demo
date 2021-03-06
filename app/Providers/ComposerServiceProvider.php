<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \View::composer(
            ['admin.common.header', 'admin.common.sidebar'],
            'AdminDemo\ViewComposers\AdminComposer'
        );
    }

    public function register()
    {
    }
}
