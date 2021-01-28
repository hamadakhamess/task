<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        app()->setLocale('ar');
        if ($request->header("lang") && $request->header('lang') =='en')
            app()->setLocale('en');
        return $next($request);

    }
}
