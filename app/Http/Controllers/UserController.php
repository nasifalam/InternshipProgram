<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function destroy($id){
        DB::delete('DELETE FROM users WHERE id = ?', [$id]); 
        return 'User Deleted';
    }

    public function update(Request $request, $id){
        /* $user = Auth::user(); */
        /* $user = User::find($id); */
        /* $user->name = Request::input('name'); */

        $user = User::where("id", $id)->update([
            "name" => $request->name
        ]);
    }
}
