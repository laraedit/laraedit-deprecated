<?php

namespace LaraEdit\Http\Middleware;

use Closure;

class InstalledMiddleware
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
        if (env('LARAEDIT_CONFIG') == 'complete')
        {
            return redirect('/');
        }

        return $next($request);
    }
}
