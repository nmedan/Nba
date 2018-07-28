<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenWords
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
         if (preg_match("/idiot|hate|stupid/i", $request->get('text')))
         {
            
             return response(view ('auth.forbidden-comment'));
         }
         return $next($request);
     }
}
