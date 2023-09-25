<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class Bibliotecario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(isset(Auth::user()->perfil)){
            if(Auth::user()->perfil=='Administrador' || Auth::user()->perfil=='Bibliotecário')

            return $next($request);
        }

            return redirect()->back();
        
    }
}
