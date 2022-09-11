<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\WorkProcess;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->setLocale('ar');

        View::share('settings', Setting::all());
        View::share('testimonials', Testimonials::all());
        View::share('work_process', WorkProcess::all());
        View::share('teams', Team::all());
    }
}
