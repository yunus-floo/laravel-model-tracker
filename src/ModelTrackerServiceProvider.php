<?php

namespace GhoniJee\ModelTracker;

use Illuminate\Support\ServiceProvider;

class ModelTrackerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $makeFieldTracker = new MakeFieldTracker();
        $makeFieldTracker->makeFieldTracker();

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../App/Classes/MakeFieldTracker.php' => app_path('Classes/MakeFieldTracker.php')]);
            $this->publishes([__DIR__ . '/../App/Traits/ModelTracker.php' => app_path('Traits/ModelTracker.php')]);
        }
    }

    public function register()
    {
    }
}
