<?php

namespace App\Http\Middleware;

use Closure;

class SetLanguage
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
        
        if($request->locale == 'en' || $request->locale == 'lt' )
        {
        \App::SetLocale($request->locale);
        return $next($request);
        }
        else{
         //   $request->locale= 'en';

        // abort(404);
        return $next($request);
        }   
        
    }
}
