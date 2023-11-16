<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Roles
{
    public function handle(Request $request, Closure $next, $roles)
    {
        $user = $request->user();

        if (!$user || !$user->role || !$user->role->label) {
            return abort(403, __('Unauthorized'));
        }

        $roleName = strtolower($user->role->label);
        $allowedRoles = $roles ? array_map('strtolower', explode('|', $roles)) : [];

        if (!in_array($roleName, $allowedRoles)) {
            return abort(403, __('Unauthorized'));
        }

        return $next($request);
    }
}
