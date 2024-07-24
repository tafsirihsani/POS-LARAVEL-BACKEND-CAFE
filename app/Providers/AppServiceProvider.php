<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // if (env(key: 'APP_ENV') === 'local' && request()->server(key: 'HTTP_X_FORWARDED_PROTO') === 'https') {
        //     URL::forceScheme(scheme: 'https');
        // }
        // if (env(key: 'APP_ENV') !== 'local') {
        //     URL::forceScheme(scheme: 'https');
        // }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFour();

        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
    }
}
