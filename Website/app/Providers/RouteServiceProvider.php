<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function toResponse($request)
{
    $user = Auth::user();

    if ($user->isProvider()) {
        return redirect()->route('provider.dashboard');
    } else {
        return redirect()->route('customer.dashboard');
    }
}
}