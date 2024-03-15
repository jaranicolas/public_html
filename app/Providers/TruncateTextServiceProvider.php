<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TruncateTextServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('truncate', function($expression){
            list($text, $length) = explode(', ', $expression);
            return "<?php echo Str::limit($text, $length); ?>";
        });
    }
}
