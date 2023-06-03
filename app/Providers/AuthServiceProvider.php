<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Period;
use App\Models\Schedule;
use App\Models\User;
use App\Policies\PeriodPolicy;
use App\Policies\SchedulePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Period::class => PeriodPolicy::class,
        Schedule::class => SchedulePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
