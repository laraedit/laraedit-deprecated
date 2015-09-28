<?php

namespace LaraEdit\Http\Middleware;

use Closure;

class InstallMiddleware
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
        if (env('LARAEDIT_CONFIG') != 'complete')
        {
            return redirect('/install');
        }
        return $next($request);
    }
}
