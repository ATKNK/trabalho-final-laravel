<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Logged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = @Auth::user();

        if($user->role == 'admin'){
            return redirect()->route('/');
        }
        elseif ($user->role == 'player'){
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }
}
