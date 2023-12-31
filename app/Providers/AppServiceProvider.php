<?php

namespace App\Providers;

use App\Models\User;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Gate;
// use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CategoryService::class, function () {
            return new CategoryService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });
    }
}
