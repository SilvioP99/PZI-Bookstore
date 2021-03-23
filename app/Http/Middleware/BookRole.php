<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class BookRole {
    public function handle ($request, Closure $next, $role1, $role2) {
        $user = Auth::user();
        if ($user && $user->hasRole($role1)) {
            return $next($request);
        }
        if ($user && $user->hasRole($role2)) {
            return $next($request);
        }
        abort (403, "Nemate pravo pristupa ovom dijelu sustava.");
    }
}

?>