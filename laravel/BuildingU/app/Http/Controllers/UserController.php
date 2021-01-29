<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return 'Hi';
    }

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
