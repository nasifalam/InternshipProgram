<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsApiController extends Controller
{
    public function index()
    {
        return Program::all();
    }

    public function store()
    {
        request()->validate([

            'buildingU_Program_Type' => 'required',
            'program_Title' => 'required',
            'program_Area' => 'required',
            'program_Skills' => 'required',
            'program_Start_Date' => 'required',
            'program_End_Date' => 'required',
            'program_Country' => 'required',
            'program_City' => 'required',
            'program_Address' => 'required',
            'program_Hosting_Organization' => 'required',
            'program_Enrollement_Space' => 'required',
        ]);

        return Program::create([

            'buildingU_Program_Type' => request('buildingU_Program_Type'),
            'program_Title' => request('program_Title'),
            'program_Area' => request('program_Area'),
            'program_Skills' => request('program_Skills'),
            'program_Start_Date' => request('program_Start_Date'),
            'program_End_Date' => request('program_End_Date'),
            'program_Country' => request('program_Country'),
            'program_City' => request('program_City'),
            'program_Address' => request('program_Address'),
            'program_Hosting_Organization' => request('program_Hosting_Organization'),
            'program_Enrollement_Space' => request('program_Enrollement_Space'),
        ]);
    }

    public function update(Program $program)
    {
        request()->validate([

            'buildingU_Program_Type' => 'required',
            'program_Title' => 'required',
            'program_Area' => 'required',
            'program_Skills' => 'required',
            'program_Start_Date' => 'required',
            'program_End_Date' => 'required',
            'program_Country' => 'required',
            'program_City' => 'required',
            'program_Address' => 'required',
            'program_Hosting_Organization' => 'required',
            'program_Enrollement_Space' => 'required',
        ]);

        $success = $program->update([

            'buildingU_Program_Type' => request('buildingU_Program_Type'),
            'program_Title' => request('program_Title'),
            'program_Area' => request('program_Area'),
            'program_Skills' => request('program_Skills'),
            'program_Start_Date' => request('program_Start_Date'),
            'program_End_Date' => request('program_End_Date'),
            'program_Country' => request('program_Country'),
            'program_City' => request('program_City'),
            'program_Address' => request('program_Address'),
            'program_Hosting_Organization' => request('program_Hosting_Organization'),
            'program_Enrollement_Space' => request('program_Enrollement_Space'),
        ]);

        return [
            'success' => $success,
        ];
    }

    public function destroy(Program $program)
    {
        $success = $program->delete();

        return [
            'success' => $success,
        ];
    }
}
