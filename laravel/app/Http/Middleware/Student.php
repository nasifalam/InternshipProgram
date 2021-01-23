<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Student
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
            return redirect('teacher');
        }
        if (Auth::user()->role == 'student')
        {
            return $next($request);
        }
    }
}
