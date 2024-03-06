<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle($request, Closure $next)
    {
        if (isAdmin('admin')) {
            return $next($request);
        }

        return redirect()->back(); 
    }
}