<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('register-access', function($user) { 
            return $user->isUserExists();
        });

        Gate::define('hasAdministratorAccess', function($user){
            return $user->hasAnyRoles(['Administrator']);
        });

        Gate::define('hasOfficeAdminAccess', function($user){
            return $user->hasAnyRoles(['Office Admin']);
        });
    }
}
