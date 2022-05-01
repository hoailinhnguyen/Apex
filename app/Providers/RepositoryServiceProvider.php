<?php

namespace App\Providers;

use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Customer\CustomerRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CustomerRepository::class,CustomerRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CustomerRepository::class, CustomerRepositoryEloquent::class);
        //:end-bindings:
    }
}
