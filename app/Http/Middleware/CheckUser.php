<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    public function handle($request, Closure $next)
    {
        if (isUser('user')) {
            return $next($request);
        }

        return redirect()->back(); 
    }
}