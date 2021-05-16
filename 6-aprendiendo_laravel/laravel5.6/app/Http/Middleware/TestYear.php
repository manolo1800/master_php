<?php

namespace App\Http\Middleware;

use Closure;

class TestYear
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
        $year= $request->route('year');
        
        if(!is_null($year) || $year>2021 || $year<1950)
        {
            return redirect('/peliculas');
        }

        return $next($request);
    }
}
