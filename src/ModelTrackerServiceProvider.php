<?php

namespace GhoniJee\ModelTracker;

use Illuminate\Support\ServiceProvider;

class ModelTrackerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $makeFieldTracker = new MakeFieldTracker();
        $makeFieldTracker->makeFieldTracker();
    }

    public function register()
    {
    }
}
