<?php

namespace Opensmarty\Providers;

use Illuminate\Support\ServiceProvider;
use Opensmarty\Repositories\Eloquent\UserRepositoryEloquent;
use Opensmarty\Repositories\Interfaces\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
