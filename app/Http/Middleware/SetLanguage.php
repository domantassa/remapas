<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Closure;
use Illuminate\Support\Facades\Session;
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
        /*
        if($request->locale == 'en' || $request->locale == 'lt' )
        {
         //  dd($request);
        
        return $next($request);
        }
        else{
         //   $request->locale= 'en';
            
       //  abort(404);
       //dd($request);
        
        }   
        */
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
       }
        return $next($request);
    }
}
