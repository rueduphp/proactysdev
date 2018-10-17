<?php

namespace Proactys\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Octo\Capsule;
use Proactys\User;
use Silber\Bouncer\Database\Models;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        \Octo\systemBoot(app_path());
        Capsule::instance(DB::connection()->getPdo());
        Models::setUsersModel(User::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
