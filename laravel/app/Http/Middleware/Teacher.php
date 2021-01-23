<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Teacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check())
        {
            return redirect()->route('login');
        }
        if (Auth::user()->role == 'admin')
        {
            return redirect('admin');
        }
        if (Auth::user()->role == 'teacher')
        {
            return $next($request);
        }
        if (Auth::user()->role == 'student')
        {
            return redirect('student');
        }
    }
}
