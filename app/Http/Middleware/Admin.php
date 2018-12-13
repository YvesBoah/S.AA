<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        $user = $request->user();
            if ($user && $user->admin) {
                return $next($request);
            }
        flashy()->error('Désolé vous n\'avez pas le droit requis pour accéder à ce contenu !', '');
        return redirect()->route('home');
    }
}
