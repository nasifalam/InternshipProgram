<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersApiController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'age' => 'required',
            'grade' => 'required',
            'ethnicity' => 'required',
            'language' => 'required',
            'interests' => 'required',
        ]);
    
        return User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'role' => request('role'),
            'age' => request('age'),
            'grade' => request('grade'),
            'ethnicity' => request('ethnicity'),
            'language' => request('language'),
            'interests' => explode(",", str_replace(" ", "", request('interests'))),
        ]);
    }
    
    public function update(User $user)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'age' => 'required',
            'grade' => 'required',
            'ethnicity' => 'required',
            'language' => 'required',
            'interests' => 'required',
        ]);
    
        $success = $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'role' => request('role'),
            'age' => request('age'),
            'grade' => request('grade'),
            'ethnicity' => request('ethnicity'),
            'language' => request('language'),
            'interests' => explode(",", str_replace(" ", "", request('interests'))),
        ]);

        return [
            'success' => $success,
        ];
    }

    public function destroy(User $user)
    {
        $success=$user->delete();

        return [
            'success' => $success,
        ];
    }
}
