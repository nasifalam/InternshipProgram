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

            'program_id' => 'required',
        ]);

        return Program::create([

            'program_id' => request('program_id'),
        ]);
    }

    public function update(Program $program)
    {
        request()->validate([

            'program_id' => 'required',
        ]);

        $success = $program->update([

            'program_id' => request('program_id'),
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
