<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : '/';

        //return $request->expectsJson() ? null : route('login'); lo comento por ahora, esta linea redirecciona al login para solicitar que se loguee primero
    }
}
