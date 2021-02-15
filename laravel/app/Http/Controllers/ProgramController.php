<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index() {

      //$programs=Program::all();
    $programs = Program::orderBy('program_Area', 'desc')->get();
    // $pizzas = Pizza::where('type', 'hawaiian')->get();


    return view('programs.index', [
      'programs' => $programs,
    ]);
  }

  public function show($id) {
    $program = Program::findOrFail($id); // use the $id variable to query the db for a record
   return view('Programs.show', ['program' => $program]);
 }

 public function delete($id) {
   $program = Program::findOrFail($id); // use the $id variable to query the db for a record
   $program->delete();
  return redirect('/Programs');
}

 public function edit($id) {
   $program = Program::findOrFail($id); // use the $id variable to query the db for a record
  return view('Programs.edit', ['program' => $program]);
}
//Request $request, $id
public function update(Request $request) {


  $program = Program::find($request->{'id'});
  $program['buildingU_Program_Type']=$request->input('buildingU_Program_Type');
  $program['program_Title']=$request->input('program_Title');
  $program['program_Area']=$request->input('program_Area');
  $program->save();
  return redirect('/Programs');

}

public function create(Request $request) {

  return view('Programs.create');


}

public function createProgram(Request $request) {



$program = new Program;

$program->{'buildingU_Program_Type'}=$request->input('BuildingU_Program_Type');
$program['program_Title']=$request->input('Program_Title');
$program['program_Area']=$request->input('Program_Area');
$program['program_Skillset']=$request->input('Program_Skillset');
$program['Program Start Date']=$request->input('Program_Start_Date');
$program['Program End Date']=$request->input('Program_End_Date');
$program['Program Country']=$request->input('Program_Country');
$program['Program City']=$request->input('Program_City');
$program['Program Address']=$request->input('Program_Address');
$program['Program Hosting Organization']=$request->input('Program_Hosting_Organization');
$program['Program Enrollement Space']=$request->input('Program_Enrollement_Space');
$program['Program Title']=$request['Program_Title'];
$program['Program Area']=$request['Program_Area'];
$program->save();
return redirect('/Programs');

}





    }
