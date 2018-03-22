<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;

//            dd($role);

            if($role === 'Administrator')
                return redirect('/admin');
            else if($role === 'Production')
                return redirect('/admin');
            else if($role === 'Agent')
                return redirect('/account/home');
            else
                return redirect('/');

        }

        return $next($request);

//        switch ($guard) {
//            case 'userAgent':
//                if (Auth::guard($guard)->check()) {
//                    return redirect()->route('agent.dashboard');
//                }
//                break;
//            default:
//                if (Auth::guard($guard)->check()) {
//                    return redirect('/');
//                }
//                break;
//        }
//        return $next($request);

    }


}
