<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        /** Environment Dependent Service Providers && Conditions */
        if ($this->app->environment() == 'production') {
            URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** User injections */
        $this->app->bind(\App\Contracts\Users\UserContract::class, \App\Repositories\Users\UserRepository::class);
        $this->app->bind(\App\Contracts\Users\TeamContract::class, \App\Repositories\Users\TeamRepository::class);

        /** Client injections */
        $this->app->bind(\App\Contracts\Clients\ClientContract::class, \App\Repositories\Clients\ClientRepository::class);

        /** Task injections */
        $this->app->bind(\App\Contracts\Tasks\TaskContract::class, \App\Repositories\Tasks\TaskRepository::class);
    }
}
