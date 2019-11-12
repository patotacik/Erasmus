<?php

namespace App\Http\Middleware;

use Closure;

class IsReferent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isReferent()) {
            return $next($request);
        }
        return redirect('home');
    }
}
