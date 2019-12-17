<?php

namespace App\Http\Middleware;

use Closure;

class Checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles)               //role-> untuk mendeteksi role dari user
    {
        //apakah role dimasukkan ke user sama dengan role yang di parameter
        if(in_array($request->user()->role, $roles)){
            //melanjutkan
            return $next($request);
        }
        return redirect('/beranda');

    }
}
