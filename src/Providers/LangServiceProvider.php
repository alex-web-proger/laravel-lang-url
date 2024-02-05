<?php

namespace Alexlen\LangUrl\Providers;

use Alexlen\LangUrl\Utilites\Locale;
use Illuminate\Support\ServiceProvider;

class LangServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       Locale::setLocaleFromUrl();

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
