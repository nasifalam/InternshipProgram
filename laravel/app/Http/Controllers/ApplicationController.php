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
    $save->save();

    return redirect('/search_programs_v2');
  }
}
