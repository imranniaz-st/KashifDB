<?php

namespace KashifBD;

use Illuminate\Support\ServiceProvider;

class KashifBDServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config, migrations, assets
        $this->publishes([
            __DIR__.'/config/kashifbd.php' => config_path('kashifbd.php'),
        ]);
    }

    public function register()
    {
        // Merge default config
        $this->mergeConfigFrom(__DIR__.'/config/kashifbd.php', 'kashifbd');
    }
}
