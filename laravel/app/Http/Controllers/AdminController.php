<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
//Controller function fetches the data from the users database
public function index()
    {
        $users = User::all();

        return view('admin.management', [
            'users' => $users,
        ]);
    }

//Controller functions allows us to see the create panel
public function create()
    {
        return view('admin.create');
    }



//Controller functions allows us to enter a new user into DB from the create panel
public function createUser(Request $request) {

$user = new User;

$user['name']=$request->input('name');
$user['email']=$request->input('email');
$user['password']=bcrypt($request['password']);
$user['role']=$request->input('role');

$user->save();
return redirect('/admin');

}

// The following fucntion deletes the user from the users-list db
public function delete($id) {
   $user = User::findOrFail($id); // use the $id variable to query the db for a record
   $user->delete();
  return redirect('/admin');
}

// The following fucntion allows us to see the edit form

public function edit($id) {
   $user = User::findOrFail($id); // use the $id variable to query the db for a record
  return view('admin.edit', ['user' => $user]);
}

// The following fucntion allows us to perform updates on user

public function update(Request $request) {



  $user = User::find($request->{'id'});
  $user['name']=$request->input('name');
  $user['email']=$request->input('email');
  $user['password']=bcrypt($request['password']);
  $user['role']=$request->input('role');
  $user->save();
  return redirect('/admin');

}
}
