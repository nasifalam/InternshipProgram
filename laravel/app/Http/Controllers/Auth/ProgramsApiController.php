<?php


namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsApiController extends Controller
{
    public function index()
    {
        return Application::all();
    }

    public function store()
    {
        request()->validate([
            'student_id' => 'required',
            'program_id' => 'required',
        ]);
    
        return Application::create([
            'student_id' => request('student_id'),
            'program_id' => request('program_id'),
        ]);
    }

    public function update(Application $application)
    {
        request()->validate([
            'student_id' => 'required',
            'program_id' => 'required',
        ]);
    
        $success = $application->update([
            'student_id' => request('student_id'),
            'program_id' => request('program_id'),
        ]);
    
        return [
            'success' => $success,
        ];
    }

    public function destroy(Application $application)
    {
        $success = $application->delete();

        return [
            'success' => $success,
        ];
    }
}
