<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{

    /**
     * 🔥 IMPORTANT: Route Middleware (Laravel 12 uses aliases)
     */
    protected $middlewareAliases = [
        // ... other middleware
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    ];
}