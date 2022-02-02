<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class UserRoleMiddelware
{

    public function handle(Request $request, Closure $next, $role = false)
    {
        $user = auth()->user();
        if(!$user){
            return redirect()->route('login');
        }

        if(!$user->getRole()){
            abort(403, 'Sizda ro`l yo`q');
        }

        if($role && $user->getRole() !== $role){
            abort(403, 'Sizda kerakli ro`l yo`q');
        }
        return $next($request);
    }

}
