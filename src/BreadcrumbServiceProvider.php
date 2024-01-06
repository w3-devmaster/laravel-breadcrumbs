<?php

namespace W3Devmaster\Breadcrumbs;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->registerHelpers();
        $this->registerPublishables();
        $this->registerCommands();
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/breadcrumbs.php', 'breadcrumbs');
        $this->app->singleton('breadcrumbs', function ($app) {
            return $this->app->make(Breadcrumbs::class);
        });
    }

    protected function registerPublishables(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/breadcrumbs.php' => config_path('breadcrumbs.php'),
        ], 'config');

    }

    protected function registerCommands(): void
    {

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([

        ]);
    }

    public function registerHelpers()
    {
        if (file_exists($file = __DIR__ . '/Helpers.php')) {
            require $file;
        }
    }

    public function registerBladeDirective()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'BreadcrumbScripts');

        Blade::directive('BreadcrumbScripts', function () {
            return "<?php echo 'Your Package Content'; ?>";
        });
    }

}
