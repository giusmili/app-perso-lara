<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('admin_id')) {
            return redirect('/login')->withErrors(['error' => 'Accès non autorisé. Veuillez vous connecter.']);
        }

        return $next($request);
    }
}
