<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class GymServiceProvider extends ServiceProvider
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
        $this->app->bind(
            \App\Repositories\ClientsRepository::class,
            \App\Repositories\ClientsRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Repositories\UsersRepository::class,
            \App\Repositories\UsersRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Repositories\MuscleGroupsRepository::class,
            \App\Repositories\MuscleGroupsRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Repositories\CompaniesRepository::class,
            \App\Repositories\CompaniesRepositoryEloquent::class
        );
        
    }
}