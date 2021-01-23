<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TeacherController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')->get();
        
        return view('building-u.teacher', [
            'students' => $students
        ]);

    }
}
