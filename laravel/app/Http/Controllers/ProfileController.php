<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; //Imported this to use DB

class ProfileController extends Controller
{
    public function index()
    {
        $userid = Auth::user()->id;
        $user = Auth::user();
        $myapplications = DB::table('applications')->where("student_id", 'like',"$userid")
            ->join('programs','programs.id',"=","applications.program_id")
            ->get();
        return view('student_controller.profile_controller', ['myapplications'=>$myapplications],['user'=> $user]);
    }
}
