<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\Cliente;

class ClienteMiddleware
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
        if (Auth::user()->userable_type != Cliente::class) {
            return redirect('home');
        }

        return $next($request);
    }
}
