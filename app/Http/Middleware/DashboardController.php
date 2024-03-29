<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DashboardController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
}
