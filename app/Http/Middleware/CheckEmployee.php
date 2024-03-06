<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEmployee
{
    public function handle($request, Closure $next)
    {
        if (isEmployee('employee')) {
            return $next($request);
        }

        return redirect()->back(); 
    }
}
