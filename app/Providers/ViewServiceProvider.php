<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $startTime = Carbon::now()->startOfDay()->toDateTime();
        $endTime  = Carbon::now()->toDateTime();
        $totalVisits = visitors()->count();
        $todayVisits = visitors()->range($startTime, $endTime)->count();
        $totalUniqueVisits = visitors()->uniqueCount();

        $visitor = [
            'total' => $totalVisits,
            'today' => $todayVisits,
            'unique' => $totalUniqueVisits,
        ];

        view()->composer('*', function ($view) use ($visitor) {
            $view->with('visitor', $visitor);
        });
    }
}
