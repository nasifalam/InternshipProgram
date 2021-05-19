<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\User;
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
        return view(
            'student_controller.profile_controller',
            ['user'=> $user],
            ['myapplications'=>$myapplications],
        );
    }

    public function update(Request $request)
    {
        $user = User::find($request->{'id'});
        $user['age']=$request->input('age');
        // $user['interests']=$request->input('interests');
        $user['interests']=explode(",", str_replace(" ", "", $request->input('interests')));
        $user['ethnicity']=$request->input('ethnicity');
        $user['language']=$request->input('language');
        $user->save();
        return redirect('/profile_controller');
    }
}
