<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; //Imported this to use DB

class ApplicationController extends Controller
{
  public function newSave(Request $request) {

    $save = new Application;

    $save['student_id']=Auth::user() -> id;
    $save['program_id']=$request->input('program_id');
    if (!(DB::table('applications')
    ->where('student_id', $save['student_id'])
    ->where('program_id', $save['program_id'])
    ->exists()))
    {
      $save->save();
    }
    return redirect('/search_programs_v2');
  }

  public function showPrograms(){
      $userid = Auth::user()->id;
      $user = Auth::user();
      $myapplications = DB::table('applications')->where("student_id", 'like',"$userid")
          ->join('programs','programs.id',"=","applications.program_id")
          ->get();
      return view("applications.my_programs", ['myapplications'=>$myapplications],['user'=> $user]);
  }
}
