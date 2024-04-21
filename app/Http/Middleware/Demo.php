<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class Demo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('hello');
        if (app('livewire')->isLivewireRequest()) {
            Log::info('IS Livewire Request');
        } else {
            Log::info('NOT Livewire Request');
        }

        return $next($request);
    }
}
