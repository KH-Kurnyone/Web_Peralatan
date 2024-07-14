<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('Admin', function(User $user) {
            return $user->role === 'Admin';
        });

        Gate::define('Manajer', function(User $user) {
            return $user->role === 'Manajer';
        });

        Gate::define('Karyawan', function(User $user) {
            return $user->role === 'Karyawan';
        });
    }
}
