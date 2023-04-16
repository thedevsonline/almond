<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class virtualassistant
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
         $user = auth()->user();
    
    if ($user && $user->role == 'virtualassistant') {
        return $next($request);
    }
     if ($user && $user->role != 'virtualassistant') {
        return redirect('index')->with('error', 'You do not have permission to access owner page.');
    }
        
    }
}
