<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\DB; //Imported this to use DB

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

  public function programs_homepage(Request $request) {

    // user search request
    $search = $request->get('search');
    $program_Type = $request->get('program_Type');
    $program_Area = $request->get('program_Area');

    
    if ($request->filled("program_Type"))
    {
        $programs = DB::table('programs')
        ->where("program_Title", "like", '%'.$search.'%')
        ->where('buildingU_Program_Type', $program_Type)->paginate(2);
    }
    elseif ($request->filled("program_Area"))
    {
        $programs = DB::table('programs')
        ->where("program_Title", "like", '%'.$search.'%')
        ->where('program_Area', $program_Area)->paginate(2);
    }
    elseif ($request->filled("program_Type") and $request->filled("program_Area"))
    {
        $programs = DB::table('programs')
        ->where("program_Title", "like", '%'.$search.'%')
        ->where('buildingU_Program_Type', $program_Type)
        ->where('program_Area', $program_Area)->paginate(2);
    }
    else
    {
        $programs = DB::table('programs')
        ->where("program_Title", "like", '%'.$search.'%')->paginate(2);
    }

    // filter options
    $filter_options = Program::orderBy('program_Area', 'asc')->get();
    $present_types = $filter_options->unique('buildingU_Program_Type');
    $present_areas = $filter_options->unique('program_Area');

    return view("programs.program_homepage", [
        'programs'=>$programs,
        'types'=>$present_types,
        'areas'=>$present_areas,
    ]);
}

  public function show($id) {
    $program = Program::findOrFail($id); // use the $id variable to query the db for a record
   return view('Programs.show', ['program' => $program]);
 }

 public function delete($id) {
   $program = Program::findOrFail($id); // use the $id variable to query the db for a record
   $program->delete();
  return redirect('/manage_programs');
}

 public function edit($id) {
   $program = Program::findOrFail($id); // use the $id variable to query the db for a record
  return view('programs.edit', ['program' => $program]);
}
//Request $request, $id
public function update(Request $request) {

  //return $request->input();

  $program = Program::find($request->{'id'});
  $program['buildingU_Program_Type']=$request->input('BuildingU_Program_Type');
  $program['program_Title']=$request->input('Program_Title');
  $program['program_Area']=$request->input('Program_Area');
  $program->save();
  return redirect('/manage_programs');

}

public function create(Request $request) {

  return view('Programs.create');


}

public function createProgram(Request $request) {

/*   DB::table('programs') //The DB finds in your database the programs table
  ->insert($request->all()); */

$program = new Program;

$program->{'buildingU_Program_Type'}=$request->input('BuildingU_Program_Type');
$program['program_Title']=$request->input('Program_Title');
$program['program_Area']=$request->input('Program_Area');
$program['program_Skills']=$request->input('Program_Skills');
$program['program_Start_Date']=$request->input('Program_Start_Date');
$program['program_End_Date']=$request->input('Program_End_Date');
$program['program_Country']=$request->input('Program_Country');
$program['program_City']=$request->input('Program_City');
$program['program_Address']=$request->input('Program_Address');
$program['program_Hosting_Organization']=$request->input('Program_Hosting_Organization');
$program['program_Enrollement_Space']=$request->input('Program_Enrollement_Space');
$program['program_Title']=$request['Program_Title'];
$program['program_Area']=$request['Program_Area'];
$program->save();
return redirect('/manage_programs');

}

public function searchPrograms(Request $request){
  $search = $request->get('search');
  $programs = DB::table('programs')->where("program_Title", "like", '%'.$search.'%')->paginate(5);
  return view("programs.index", ['programs'=>$programs]);
}

    }
