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
        $interests = implode(", ", $user->interests);
        $myapplications = DB::table('applications')->where("student_id", 'like',"$userid")
        ->join('programs','programs.id',"=","applications.program_id")
        ->get();
        $recommended = array();
        foreach($user->interests as $interest)
        {
            foreach (DB::table('programs')->where("program_Area", 'like',"$interest")->get() as $program)
            {
                if (!(DB::table('applications')
                ->where('student_id', $userid)
                ->where('program_id', $program->id)
                ->exists()))
                {
                    array_push($recommended, $program);
                }
            }
        }

        return view('student_controller.profile_controller')
        ->with('user',$user)
        ->with('myapplications', $myapplications)
        ->with('interests', $interests)
        ->with('recommended', $recommended);
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
