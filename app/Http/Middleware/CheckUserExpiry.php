<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class CheckUserExpiry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {

            $currentDate = Carbon::now()->format('Y-m-d');
            $expiryDate = Carbon::parse(auth()->user()->expired_at)->format('Y-m-d');

            // dd($currentDate < $expiryDate);
            if ($currentDate < $expiryDate) {
                // User is not expired, proceed with the request
                return $next($request);
            } else {
                return redirect()->route('plans');
            }
        }

        // User is not authenticated, proceed with the request
        return $next($request);
    }
}
